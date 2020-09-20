
import React, { useState, useEffect } from "react";
import './App.css';
import "bootstrap/dist/css/bootstrap.min.css";
import {
  BrowserRouter as Router,
  Switch,
  Route,
  Link
} from "react-router-dom";
import AuthService from "./services/auth.service";

import Login from './components/Login'
import Profile from './components/Profile'

function App() {
  const [showModeratorBoard, setShowModeratorBoard] = useState(false);


  useEffect(() => {
    const user = AuthService.getCurrentUser();

    if (user) {
      // setCurrentUser(user);
      // setShowModeratorBoard(user.roles.includes("ROLE_MODERATOR"));
      // setShowModeratorBoard('admin');
      // setShowAdminBoard(user.roles.includes("ROLE_ADMIN"));
    }
    console.log(user)
  }, []);

  return (
    <Router>
    <div>
      <nav>
        <ul>
          <li>
            <Link to="/">Home</Link>
          </li>
          <li>
            <Link to="/about">About</Link>
          </li>
          <li>
            <Link to="/users">Users</Link>
          </li>
          <li>
            <Link to="/login">Login</Link>
          </li>
          <li>
            <Link to="/profile">Profile</Link>
          </li>
        </ul>
        {JSON.stringify(showModeratorBoard)}
      </nav>

      {/* A <Switch> looks through its children <Route>s and
          renders the first one that matches the current URL. */}
      <Switch>
        <Route exact path={["/about"]} component={About} />
        <Route exact path={["/users"]} component={Users} />
        <Route exact path={["/login"]} component={Login} />
        <Route exact path={["/profile"]} component={Profile} />
        <Route exact path={["/", "/home"]} component={Home} />
      
      </Switch>
    </div>
  </Router>
  );
}


function Home() {
  return <h2>Home</h2>;
}

function About() {
  return <h2>About</h2>;
}

function Users() {
  return <h2>Users</h2>;
}

export default App;