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


            
            </Router>
        </div>
    )
}

