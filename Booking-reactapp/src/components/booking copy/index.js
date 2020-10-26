
import React from 'react'
import { Row, Col, Badge } from 'reactstrap';
import { useSelector, useDispatch } from 'react-redux'
import FullCalendar from './fullcalendar'
import List from './list';
import ListRoom from './listRoom';

function Book() {

    const counter = useSelector(state => state.book.numOfBooks);

    return (
        <div>
            <div className="mb-3">
                <Badge color="primary" pill>Primary</Badge>{' '}
                <Badge color="secondary" pill>Secondary</Badge>{' '}
                <Badge color="success" pill><i class="fas fa-check"></i> อนุมัติ</Badge>{' '}
                <Badge color="danger" pill><i class="fas fa-times"></i> ยกเลิก</Badge>{' '}
                <Badge color="warning" pill><i class="far fa-pause-circle"></i> รอการยินยัน</Badge>{' '}
            </div>
            <List />
            <Row>
                <Col xs="9">
                    <FullCalendar />
                </Col>
                <Col xs="3">
                    <ListRoom />
                </Col>
            </Row>
        </div>
    )
}
export default Book;

