import React, { useState, useEffect } from "react";
import { useSelector, useDispatch } from 'react-redux'
import { Row, Col, Button } from 'reactstrap';
import MeetingRoomForm from './meeting-room-form';
import MeetingRoomTable from './meeting-room-table';
import axios from "../../axios.config";

export default function Index() {
    const store = useSelector(state => state);
    const items = useSelector(state => state.meettingroom.items);

    async function getItem() {
        const res = await axios.get("meetting-room");
        dispatch({
          type: 'GET_MEETTINGROOM',
          payload: res.data
        })
      }
    
      async function itemEdit(i) {
        const res = await axios.get("meetting-room");
        dispatch({
          type: 'GET_MEETTINGROOM',
          payload: res.data
        })
      }

    useEffect(() => {
        (async () => {
    
        })();
      }, []);
    
    const dispatch = useDispatch();
    return (
        <div>
            <Row>
                <Col sm="4">
                    <MeetingRoomForm />
                </Col>
                <Col sm="8">
                    <MeetingRoomTable items={items} getItemช={getItem}/>
                </Col>
            </Row>
        </div>
    )


}
const getMettingRoom = () => {
    alert()
    }


