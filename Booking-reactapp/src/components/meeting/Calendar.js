import React, { useEffect, useState, useMemo } from 'react';
import { useSelector } from 'react-redux';
import moment from 'moment';

function Calendar() {
    // const calendarFromStore = useSelector(state => state.calendar);
    const [calendar, setCalendar] = useState({});
    const [settings, setSettings] = useState({
        currentWeek: [],
        diffWeeks: 0,
        totalAppointments: []
}); 

// useEffect(() => {
//     setCalendar(calendarFromStore);
//     setSettings({ ...settings, currentWeek: getCurrentWeek })
// }, [calendarFromStore]);

// useEffect(() => {
//     setSettings({ ...settings, currentWeek: getCurrentWeek })
// }, [settings.diffWeeks])

const getCurrentWeek = useMemo(() => {
    let currentDate = moment().add(settings.diffWeeks, 'weeks');
    let days = [];
    for (let i = 3; i >= 0; i--) {
        days.push(moment(currentDate).subtract(i, 'days').format('dddd DD/MM/YY'));
    }
    for (let i = 1; i <= 3; i++) {
        days.push(moment(currentDate).add(i, 'days').format('dddd DD/MM/YY'));
    }
    return days;
}, [settings.diffWeeks])

const daysHeader = useMemo(() => {
    if (!settings.currentWeek) return;
    return settings.currentWeek.map((day, i) =>
        <div className={`day-title ${i === 3 && !settings.diffWeeks ? 'today' : ''}`} key={day}>
            <span className="day">{day.substring(0, day.indexOf(' '))}</span>
            <span className="date">{day.substring(day.indexOf(' '))}</span>
        </div>)
}, [settings.currentWeek, settings.diffWeeks]);

const timeline = useMemo(() => {
    let currTime = '10:00';
    const stopTime = '19:00';
    const interval = 15;
    let timesArr = [];
    while (currTime !== stopTime) {
        timesArr.push(currTime);
        currTime = moment(currTime, 'HH:mm').add(interval, 'minute').format('HH:mm');
    }
    setSettings({ ...settings, totalAppointments: timesArr })
    return timesArr;
}, [])

const convertStringToTimestamp = (day, time) => {
    const fixedDay = day.substring(day.indexOf(' '));
    return moment(`${fixedDay} ${time}`, 'DD/MM/YY HH:mm').unix();
}

const calendarApts = useMemo(() => {
    if (!settings.currentWeek) return;
    return settings.currentWeek.map(day =>
        <div className="line" key={day}>
            {timeline.map(time =>
                <div key={`${day} ${time}`}
                    time={convertStringToTimestamp(day, time)} onClick={() => console.log(day, time)}>
                </div>)
            }
        </div>
    )
}, [settings.currentWeek, timeline])

useMemo(() => {
    calendar.appointments && calendar.appointments.map(apt => apt);
}, [calendar.appointments])

const changeWeeks = val => {
    setSettings({ ...settings, diffWeeks: !val ? 0 : settings.diffWeeks + val })
}

return (
    <div className="calendar-container">
        <div className="navigation">
            <div className="last-buttons">
                <button onClick={() => changeWeeks(-5)}>Last month</button>
                <button onClick={() => changeWeeks(-1)}>Last week</button>
            </div>
            <button onClick={() => changeWeeks(0)}>Current Week</button>
            <div className="next-buttons">
                <button onClick={() => changeWeeks(1)}>Next week</button>
                <button onClick={() => changeWeeks(5)}>Next month</button>
            </div>
        </div>
        <div className="calendar-header">
            {daysHeader}
        </div>
        <div className="calendar-content">
            <div className="calendar-timeline">
                {timeline.map(time => <div key={time}><span>{time}</span></div>)}
            </div>
            <div className="calendar-vertical-lines">
                {calendarApts}
            </div>
        </div>
    </div>
)
}

export default Calendar;
