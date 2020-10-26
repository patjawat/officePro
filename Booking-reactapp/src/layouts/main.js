import React from 'react'

import {
    BrowserRouter as Router,
    Switch,
    Route,
} from "react-router-dom";



import Counter from '../components/counter'
// import Book from './components/book'
import Sidebar from './sidebar';
import Navbar from './navbar';
// import Demo1 from './components/demo1'
import Home from '../pages'
// import Product from './components/products'
import Manual from '../pages/manual'
import Setting from '../pages/setting'
import AddBooking from '../pages/booking/addbooking'

export default function Main() {

    // useEffect(async () => {
    //     await loadContent();
    //    }, []);

    return (
        <div>
            <Router>
                <Navbar />
                <Switch>
                    <Route path="/setting">
                        <Setting />
                    </Route>
                    <Route path="/manual">
                        <Manual />
                    </Route>
                    <Route path="/addbooking">
                        <AddBooking />
                        </Route>
                  
                    <Route path="/" exact>
                        <Home />
                    </Route>
                </Switch>
            </Router>
        </div>
    )
}

