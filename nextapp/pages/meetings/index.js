import React from 'react'
import Link from 'next/link'
import Theme from "../../layouts/adminle3";
import List from '../../components/meeting/list'
import RoomForm from '../../components/meeting/roomForm'
export default function Meetings() {
    return (
        <div>

        <RoomForm />
            <List />
        </div>
    )
}
Meetings.Layout =Theme;