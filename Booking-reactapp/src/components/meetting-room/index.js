import React from 'react'
import { useSelector, useDispatch } from 'react-redux'
import { Row, Col } from 'reactstrap';
import MeetingRoomForm from './meeting-room-form';
import MeetingRoomTable from './meeting-room-table';

export default function Index() {
    const store = useSelector(state => state);
    const dispatch = useDispatch();
    return (
        <div>
            <Row>
                <Col sm="4">
                    <MeetingRoomForm />
                </Col>
                <Col sm="8">
                    <MeetingRoomTable />
                </Col>
            </Row>
        </div>
    )


}
const getMettingRoom = () => {
    alert()
    }


