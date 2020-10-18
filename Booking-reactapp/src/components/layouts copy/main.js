import React from 'react'

import {
    BrowserRouter as Router,
    Switch,
    Route,
} from "react-router-dom";


import Counter from '../counter'
import Book from '../booking'
import Sidebar from './sidebar';
import Navbar from './navbar';
import Demo1 from '../demo1'
import Home from '../home'
import Product from '../products'
import Meeting from '../meeting'

export default function Main() {

    // useEffect(async () => {
    //     await loadContent();
    //    }, []);

    return (
        <div>
            <Router>
                <Navbar />
                <div>
                    <Sidebar />
                    <div>
                        <div className="content-wrapper">
                            <div className="content-header">
                                <div className="container-fluid">

                                </div>
                            </div>
                            <div className="content">
                                <div className="container-fluid">
                                    <Switch>
                                   
                                        <Route path="/counter">
                                            <Counter />
                                        </Route>
                                        <Route path="/meetings">
                                            <Meeting />
                                        </Route>
                                        <Route path="/books">
                                            <Book />
                                        </Route>
                                        <Route path="/demo1">
                                            <Demo1 />
                                        </Route>
                                        <Route path="/products">
                                            <Product />
                                        </Route>
                                        <Route path="/" exact>
                                            <Home />
                                        </Route>
                                    </Switch>
                                </div>
                            </div>
                        </div>
                        <aside className="control-sidebar control-sidebar-dark">
                            <div className="p-3">
                                <h5>Title</h5>
                                <p>Sidebar content</p>
                            </div>
                        </aside>
                        <footer className="main-footer">
                            <div className="float-right d-none d-sm-inline">
                                Anything you want
    </div>
                            <strong>Copyright © 2014-2019 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
                        <div id="sidebar-overlay" />
                    </div>
                </div>
            </Router>
        </div>
    )
}

