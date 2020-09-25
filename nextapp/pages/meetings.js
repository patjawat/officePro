import React from 'react'
import MyLayout from "../layouts/MyLayout";
import List from '../components/meeting/list'
export default function Meetings() {
    return (
        <div>
            <List />
        </div>
    )
}
Meetings.Layout = MyLayout;