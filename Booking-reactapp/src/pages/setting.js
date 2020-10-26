import React, { useState } from 'react';
import { TabContent, TabPane, Nav, NavItem, NavLink, Card, Button, CardTitle, CardText, Row, Col } from 'reactstrap';
import classnames from 'classnames';

import ContentHeader from '../layouts/contentHeader'
import MettingRoom from '../components/meetting-room'
import Category from '../components/category'
import axios from '../axios.config'


// const Demo = () => {
//     alert();
// }
export default function Setting(props) {

    const [activeTab, setActiveTab] = useState('2');

    const [ex1, setEx1] = useState('1');

    const toggle = tab => {
        if (activeTab !== tab) setActiveTab(tab);
    }

    return (
        <ContentHeader title="ตั้งค่าระบบ">
            <Nav tabs>
                <NavItem>
                    <NavLink
                        className={classnames({ active: activeTab === '1' })}
                        onClick={() => { toggle('1'); }}
                    >
                        ห้องประชุม
          </NavLink>
                </NavItem>
                <NavItem>
                    <NavLink
                        className={classnames({ active: activeTab === '2' })}
                        onClick={() => { toggle('2'); }}
                    >
                        แผนก/หน่วยงาน
          </NavLink>
                </NavItem>
                <NavItem>
                    <NavLink
                        className={classnames({ active: activeTab === '3' })}
                        onClick={() => { toggle('3'); }}
                    >
                       หมวดหมู่
          </NavLink>
                </NavItem>
            </Nav>
            <TabContent activeTab={activeTab}>
                <TabPane tabId="1">
                    <Row>
                        <Col sm="12">
                            <MettingRoom ex1={ex1} setEx1={setEx1} />
                        </Col>
                    </Row>
                </TabPane>
                <TabPane tabId="2">
                    <Row>
                        <Col sm="12">
                            <Category title="แผนก/หน่วยงาน" type="department" />
                        </Col>

                    </Row>
                </TabPane>
                <TabPane tabId="3">
                    <Row>
                        <Col sm="12">
                            <Category title="หมวดหมู่" type="rooms" />
                        </Col>

                    </Row>
                </TabPane>
            </TabContent>
        </ContentHeader>

    );

}
