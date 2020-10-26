import React, { useEffect } from "react";
import { Button } from "reactstrap"
import { useSelector, useDispatch } from 'react-redux'
import axios from "axios";
import config from '../../global.config'
import { Link } from "react-router-dom";

export default function ListRoom() {

    const url = config.env.image_url;
    const items = useSelector(state => state.meettingroom.items);
    const dispatch = useDispatch();

    useEffect(() => {
        (async () => {
            const res = await axios.get("meetting-room");
            dispatch({
                type: 'GET_MEETTINGROOM',
                payload: res.data.rooms
            })
        })();
    }, []);

    return (
        <div>
            {items.map((item, i) =>
                <ul className="list-unstyled">
                    <li className="row mb-4">
                        <a href="#" className="col-12">
                            <h6 className="mb-0 h5 text-dark">{item.name} </h6>
                            {item.photo ? <img src={url + 'rooms/' + item.photo} style={{ width: '280px', height: '200px' }} /> : <img src="https://via.placeholder.com/250x200/5fa9f8/ffffff" alt="Image" className="rounded img-fluid" />}
                        </a>
                        <div className="col-12">
                            <div className="d-flex text-small mb-2">
                                <a href="#">Business</a>
                                <span className="text-muted ml-1">{item.description}</span>
                            </div>
                            <div className="text-small">
                                <Button size="sm">รายละเอียดเพิ่มเติม</Button>{'   '}
                                <Link to="/addbooking">
                                    <Button size="sm" color="success" onClick={()=>{
                                        dispatch({
                                            type: 'ADD_BOOKING',
                                            payload:{
                                                room_id:item.id
                                            }
                                        })
                                    }}>จอง</Button>
                                </Link>

                            </div>
                        </div>
                    </li>
                </ul>
            )}
        </div>
    )
}
