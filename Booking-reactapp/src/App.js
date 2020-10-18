import React from 'react'
import { useSelector, useDispatch } from 'react-redux'
import './App.css'
import { api } from './service/config'
import axios from 'axios'


import {
  BrowserRouter as Router,
  Switch,
  Route,
  Redirect,
  useHistory,
  useLocation
} from "react-router-dom";
import Main from './components/layouts/main'

export default function App() {
  return (
    <Router>
      <div>
        <Switch>
          <Route path="/login">
            <LoginPage />
          </Route>
          <PrivateRoute path="/">
            <Main />
          </PrivateRoute>
        </Switch>
      </div>
    </Router>
  );
}

function PrivateRoute({ children, ...rest }) {
  const isAuthUser = useSelector(state => state.auth.isAuthUser);
  return (
    <Route
      {...rest}
      render={({ location }) =>
        isAuthUser ? (
          children
        ) : (
            <Redirect
              to={{
                pathname: "/login",
                state: { from: location }
              }}
            />
          )
      }
    />
  );
}

function LoginPage() {

  const dispatch = useDispatch();
  let history = useHistory();
  let location = useLocation();
  const auth = useSelector(state => state.auth);


  let { from } = location.state || { from: { pathname: "/" } };
  const login = async () => {
    try {
      let res = await axios.post(api.url + 'login', {
        email: 'admin@local.com',
        password: '112233'
      });

      dispatch({ type: "USER_LOGIN", payload: res.data })
      localStorage.setItem("token", res.data.token)
      // history.replace('/');
      window.location.href = '/'


    } catch (error) {
      console.log(error)
    }
  };

  return (
    <div className="row mt-5">
      {/* <p>You must log in to view the page at {from.pathname}</p> */}
      <div className="col-4 offset-4">
        <div className="login-logo">
          <a href="../../index2.html"><b>Admin</b>LTE</a>
          <h3>{JSON.stringify(auth)}</h3>
        </div>
        {/* /.login-logo */}
        <div className="card">
          <div className="card-body login-card-body">
            <p className="login-box-msg">Sign in to start your session</p>
            {/* <form action="../../index3.html" method="post"> */}
            <div className="input-group mb-3">
              <input type="email" className="form-control" placeholder="Email" />
              <div className="input-group-append">
                <div className="input-group-text">
                  <span className="fas fa-envelope" />
                </div>
              </div>
            </div>
            <div className="input-group mb-3">
              <input type="password" className="form-control" placeholder="Password" />
              <div className="input-group-append">
                <div className="input-group-text">
                  <span className="fas fa-lock" />
                </div>
              </div>
            </div>
            <div className="row">
              <div className="col-8">
                <div className="icheck-primary">
                  <input type="checkbox" id="remember" />
                  <label htmlFor="remember">
                    Remember Me
              </label>
                </div>
              </div>
              {/* /.col */}
              <div className="col-4">
                <button type="submit" className="btn btn-primary btn-block" onClick={login}>Sign In</button>
              </div>
              {/* /.col */}
            </div>
            {/* </form> */}
            <div className="social-auth-links text-center mb-3">
              <p>- OR -</p>
              <a href="#" className="btn btn-block btn-primary">
                <i className="fab fa-facebook mr-2" /> Sign in using Facebook
        </a>
              <a href="#" className="btn btn-block btn-danger">
                <i className="fab fa-google-plus mr-2" /> Sign in using Google+
        </a>
            </div>
            {/* /.social-auth-links */}
            <p className="mb-1">
              <a href="forgot-password.html">I forgot my password</a>
            </p>
            <p className="mb-0">
              <a href="register.html" className="text-center">Register a new membership</a>
            </p>
          </div>
          {/* /.login-card-body */}
        </div>
      </div>
    </div>

  );
}
