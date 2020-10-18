
import React from 'react'
import { useSelector, useDispatch } from 'react-redux'
import FullCalendar from './fullcalendar'
import List from './list';
function Book() {
    const counter = useSelector(state => state.book.numOfBooks);
    const dispatch = useDispatch();

    return (
        <div>
           <List />
      <FullCalendar />
        </div>
    )

}
export default Book;

