import React from 'react'

import ContentHeader from '../../layouts/contentHeader'
import AddBookingForm from '../../components/booking/addBookingForm'
import BookingForm from './BookingForm'
export default function Addbooking() {


    return (
        <ContentHeader title="บันทึกการขอใช้ห้องประชุม">
            {/* {JSON.stringify(items)} */}
            <AddBookingForm  />
            <BookingForm />
            </ContentHeader>

    )
}
