import React, {Component} from 'react';
import {BrowserRouter, Link, Route, Switch,withRouter} from 'react-router-dom';
// import Home from './Home/Home';
import Login from '../views/Login/Login';
import Register from '../views/Register/Register';
// import NotFound from './views/NotFound/NotFound'
// User is LoggedIn
import PrivateRoute from './PrivateRoute'
// import Dashboard from '../views/user/Dashboard/Dashboard';
const Main = props => (
<Switch>
  {/*User might LogIn*/}
  {/* <Route exact path='/' component={Home}/> */}
  {/*User will LogIn*/}
  <Route path='/login' component={Login}/>
  <Route path='/register' component={Register}/>
  {/* User is LoggedIn*/}
  <PrivateRoute path='/dashboard' component={Dashboard}/>
  {/*Page Not Found*/}
  {/* <Route component={NotFound}/> */}
</Switch>
);

class Header extends Component {
  // 1.1
  constructor(props) {
    super(props);
      this.state = {
        user: props.userData,
        isLoggedIn: props.userIsLoggedIn
      };
      this.logOut = this.logOut.bind(this);
  }
  // 1.2
  logOut() {
    let appState = {
      isLoggedIn: false,
      user: {}
    };
    localStorage["appState"] = JSON.stringify(appState);
    this.setState(appState);
    this.props.history.push('/login');
  }
  // 1.3
  render() {
    const aStyle = {
      cursor: 'pointer'
    };
    
    return (
<nav className="navbar">
        <ul>
          <li><Link to="/">Index</Link></li>
          {this.state.isLoggedIn ? 
           <li className="has-sub"><Link to="/dashboard">Dashboard</Link></li> : ""}
          {!this.state.isLoggedIn ?
            <li><Link to="/login">Login</Link> | <Link to="/register">Register</Link></li> : ""}
        </ul>
      </nav>
    )
  }
}
export default Header