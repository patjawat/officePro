import React from 'react'
import {Link} from "react-router-dom";
import logo from 'admin-lte/dist/img/AdminLTELogo.png'
import user from 'admin-lte/dist/img/user2-160x160.jpg'

export default function sidebar() {
    return (
        <aside className="main-sidebar sidebar-dark-primary elevation-4">
            <a href="index3.html" className="brand-link">
                <img src={logo} alt="AdminLTE Logo" className="brand-image img-circle elevation-3" style={{ opacity: '.8' }} />
                <span className="brand-text font-weight-light">AdminLTE 3</span>
            </a>
            <div className="sidebar">

                <div className="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div className="image">
                        <img src={user} className="img-circle elevation-2" alt="User Image" />
                    </div>
                    <div className="info">
                        <a href="#" className="d-block">Alexander Pierce</a>
                    </div>
                </div>

                <nav className="mt-2">
                    <ul className="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li className="nav-item">
                            <Link className="nav-link" to="/">
                                <i className="nav-icon fas fa-home" />
                                <p>
                                    Home
                                    <span className="right badge badge-danger">New</span>
                                </p>
                            </Link>
                        </li>

                        <li className="nav-item">
                            <Link className="nav-link" to="/counter">
                                <i className="nav-icon fas fa-tachometer-alt" />
                                <p>
                                    Counter
                                    <span className="right badge badge-danger">New</span>
                                </p>
                            </Link>
                        </li>

                        <li className="nav-item">
                            <Link className="nav-link" to="/books">
                                <i className="nav-icon fas fa-tachometer-alt" />
                                <p>
                                    Books
                                </p>
                            </Link>
                        </li>

                        <li className="nav-item">
                            <Link className="nav-link" to="/login">
                            <i class="nav-icon fas fa-user-lock" /> 
                                <p>
                                    Login
                                </p>
                            </Link>
                        </li>

                        <li className="nav-item">

                            <Link className="nav-link" to="/demo1">
                                <i className="nav-icon fas fa-tachometer-alt" />
                                <p>
                                    Demo1
                               </p>
                            </Link>

                        </li>
                        <li className="nav-item">
                            <a href="#" className="nav-link">
                                <i className="nav-icon fas fa-th" />
                                <p>
                                    Simple Link
                                    <span className="right badge badge-danger">New</span>
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
    )
}
