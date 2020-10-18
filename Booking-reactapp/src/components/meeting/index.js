import React, { useState } from 'react'
import FullCalendar from '@fullcalendar/react'
import dayGridPlugin from '@fullcalendar/daygrid'
import interactionPlugin from '@fullcalendar/interaction'
import Calendar from './Calendar'



export default function Index() {
    const [show, setShow] = useState(false);
    const handleShow = () => setShow(!show);
    const [settings, setSettings] = useState({
        currentWeek: [],
        diffWeeks: 0,
        totalAppointments: []
});
    const handleEventDrop = (info) => {
        if (window.confirm("Are you sure you want to change the event date?")) {
            console.log('change confirmed')

            // updateAppointment is another custom method
            // this.updateAppointment({...info.event.extendedProps, start: info.event.start, end: info.event.end})

        } else {
            console.log('change aborted')
        }
    }

    const handleEventClick = (event) => {
        // openAppointment is a function I wrote to open a form to edit that appointment
        // setSettings(settings.totalAppointments = event.extendedProps)
        console.log(event)
    }

    const formatEvents = (event) => {
        // return this.props.appointments.map(appointment => {
        //     const { title, end, start } = appointment

        //     let startTime = new Date(start)
        //     let endTime = new Date(end)

        //     return {
        //         title,
        //         start: startTime,
        //         end: endTime,
        //         extendedProps: { ...appointment }
        //     }
        // })
    }

    return (
        <div>
            {/* <Calendar /> */}
            {JSON.stringify(show)}
            {JSON.stringify(settings)}
            <button onClick={handleShow}>Show</button>
            <FullCalendar
                defaultView="dayGridMonth"
                plugins={[dayGridPlugin, interactionPlugin]}
                editable={true}
                events={[
                    { title: 'event 1', date: '2020-09-24' },
                    { title: 'event 2', date: '2020-09-25' }
                ]}
                eventDrop={handleEventDrop}
                eventClick={handleEventClick}
                // events={formatEvents}
            />
        </div>
    )









}

