import React, { useState, useEffect } from 'react';
import { useHistory } from 'react-router-dom'
import { useSelector, useDispatch } from 'react-redux'
import { useRouter } from 'next/router'
import BlankLayout from "../layouts/blankLayout";
import { connect } from 'react-redux';
import { Formik } from 'formik';
import axios from 'axios'
import Cookies from 'js-cookie'

export default function Login() {
    const [email, setEmail] = useState('ryan@gmail.com');
    const [password, setPassword] = useState('rrrrrr9');
    const [user, setUser] = useState('rrrrrr9');
    const auth = useSelector(state => state.auth);

    const dispatch = useDispatch();
    const router = useRouter()
    const history = useHistory()

    const url = process.env.api;

    // useEffect(() => {
    //   if (user) { // will run the condition if user exists
    //     router.push('/')
    //   }

    // }, [user])

    const handleSubmit = e => {
        e.preventDefault();
        console.log('login with ', { email, password });
    };

    return (
        <div>
            <div className="card text-white bg-dark shadow-lg rounded wrapper-box mt-5" style={{ width: '30rem' }}>
                <div className=" card-header">
                    <h5><i className="fas fa-fingerprint" />&nbsp;&nbsp;Authentication</h5>
                </div>
                <div className="card-body">
                    <Formik
                        initialValues={{ email: '', password: '' }}
                        validate={values => {
                            const errors = {};
                            if (!values.email) {
                                errors.email = 'Required';
                            } else if (
                                !/^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,}$/i.test(values.email)
                            ) {
                                errors.email = 'Invalid email address';
                            }
                            return errors;
                        }}
                        onSubmit={async (values, { setSubmitting }) => {
                            let res = await axios.post(url + 'login', values);
                            let data = res.data;
                            try {
                                dispatch({
                                    type: "USER_LOGIN",
                                    payload: res.data
                                })
                                Cookies.set('token', 'Bearer ' + data.token, { expires: 60 })
                                router.push('/')

                            } catch (error) {
                                setErrorMessage(error.message);
                            }
                        }}
                    >
                        {({
                            values,
                            errors,
                            touched,
                            handleChange,
                            handleBlur,
                            handleSubmit,
                            isSubmitting,
                            /* and other goodies */
                        }) => (
                                <form onSubmit={handleSubmit}>
                                    <div className="form-group" style={{ marginBottom: '0.1rem' }}>
                                        <label for="uname">Username:</label>
                                        <input
                                            type="email"
                                            name="email"
                                            className="form-dark"
                                            onChange={handleChange}
                                            onBlur={handleBlur}
                                            value={values.email}
                                        />
                                        {errors.email && touched.email && errors.email}
                                    </div>
                                    <div className="form-group">
                                        <label for="uname">Password:</label>
                                        <input
                                            type="password"
                                            name="password"
                                            className="form-dark"
                                            onChange={handleChange}
                                            onBlur={handleBlur}
                                            value={values.password}
                                        />
                                        {errors.password && touched.password && errors.password}
                                    </div>

                                    <div className="social-auth-links">
                                        <button type="submit" className="btn btn-primary" name="login-button" tabIndex={3} disabled={isSubmitting}><i className="fas fa-user-lock" /> เข้าสู่ระบบ</button>{' '}
                                        <a className="btn btn-default" href="/site/register"><i className="fas fa-user-plus" /> ลงทะเบียน</a>
                                    </div>

                                </form>
                            )}
                    </Formik>

                </div>
            </div>

            <a className="btn btn-primary auth-link" href="/site/auth?authclient=facebook" title="Facebook" data-popup-width={860} data-popup-height={480}>Login with Facebook</a>
        </div>
    );
};

const logout = (email, password) => {
    Cookies.remove('token')
    setUser(null)
    window.location.pathname = '/login'
}

Login.Layout = BlankLayout;
