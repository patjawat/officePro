import React, { useState, useEffect } from "react";
import {Button} from "reactstrap"
import { useForm } from "react-hook-form";
import { useSelector, useDispatch } from 'react-redux'
import axios from "axios";
export default function ListRoom() {
  const items = useSelector(state => state.meettingroom.items);
  const dispatch = useDispatch();

  useEffect(() => {
    (async () => {
        const res = await axios.get( "meetting-room");
         dispatch({
            type:'GET_MEETTINGROOM',
            payload:res.data
          })
    })();
}, []);


    return (
        <div>
                  {items.map((item, i) =>

             <ul className="list-unstyled">
                        <li className="row mb-4">
                            <a href="#" className="col-4">
                                <img src="https://via.placeholder.com/300x300/5fa9f8/ffffff" alt="Image" className="rounded img-fluid" />
                            </a>
                            <div className="col-8">
                                <a href="#">
                                    <h6 className="mb-3 h5 text-dark">{item.name} </h6>
                                </a>
                                <div className="d-flex text-small mb-2">
                                    <a href="#">Business</a>
                  <span className="text-muted ml-1">{item.description}</span>
                                </div>
                                <div className="text-small">
                                   <Button size="sm">รายละเอียดเพิ่มเติม</Button>{'   '}
                                   <Button size="sm" color="success">จอง</Button>
                                </div>
                            </div>
                        </li>
                       
                    </ul>
                          )
                          }
        </div>
    )
}
