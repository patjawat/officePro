import React from 'react'
import { useSelector, useDispatch } from 'react-redux'
import ContentHeader from '../layouts/contentHeader'
import AddBookingForm from '../components/booking/addBookingForm'
export default function Addbooking() {
    const items = useSelector(state => state.meettingroom.addBooking);

    return (
        <ContentHeader title="บันทึกการขอใช้ห้องประชุม">
            {/* {JSON.stringify(items)} */}
            <AddBookingForm  />
            add booking
            </ContentHeader>

    )
}
