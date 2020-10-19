import React from 'react'
import { Button } from 'reactstrap';


export default function lLstRoom() {
    return (
        <div>
             <ul className="list-unstyled">
                        <li className="row mb-4">
                            <a href="#" className="col-4">
                                <img src="https://via.placeholder.com/300x300/5fa9f8/ffffff" alt="Image" className="rounded img-fluid" />
                            </a>
                            <div className="col-8">
                                <a href="#">
                                    <h6 className="mb-3 h5 text-dark">ห้องประชุมทรายแก้ว </h6>
                                </a>
                                <div className="d-flex text-small">
                                    <a href="#">Business</a>
                                    <Button color="primary">primary</Button>{' '}
                                    <span className="text-muted ml-1">29th November</span>
                                </div>
                            </div>
                        </li>
                        <li className="row mb-4">
                            <a href="#" className="col-4">
                                <img src="https://via.placeholder.com/300x300/5fa9f8/ffffff" alt="Image" className="rounded img-fluid" />
                            </a>
                            <div className="col-8">
                                <a href="#">
                                    <h6 className="mb-3 h5 text-dark">ห้องประชุมโอ๊ค.</h6>
                                </a>
                                <div className="d-flex text-small">
                                    <a href="#">Design</a>
                                    <span className="text-muted ml-1">27th November</span>
                                </div>
                            </div>
                        </li>
                        <li className="row mb-4">
                            <a href="#" className="col-4">
                                <img src="https://via.placeholder.com/300x300/5fa9f8/ffffff" alt="Image" className="rounded img-fluid" />
                            </a>
                            <div className="col-8">
                                <a href="#">
                                    <h6 className="mb-3 text-dark h5">ห้องประชุมแก่นขอน</h6>
                                </a>
                                <div className="d-flex text-small">
                                    <a href="#">Business</a>
                                    <span className="text-muted ml-1">23rd November</span>
                                </div>
                            </div>
                        </li>
                        
                    </ul>
        </div>
    )
}
