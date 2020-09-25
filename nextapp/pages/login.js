import React, { useState, useEffect } from 'react';
import { useHistory } from 'react-router-dom'
import { useRouter } from 'next/router'
import BlankLayout from "../layouts/blankLayout";
import { connect } from 'react-redux';
import { Formik } from 'formik';
// import Layout from '../components/Layout';

export default function Login() {
    const [email, setEmail] = useState('ryan@gmail.com');
    const [password, setPassword] = useState('rrrrrr9');
    const [user, setUser] = useState('rrrrrr9');
    const router = useRouter()
    const history = useHistory()

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
                <h1>API is: {process.env.api}</h1>
                {JSON.stringify(process.env.device)}

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
                        onSubmit={(values, { setSubmitting }) => {
                            setTimeout(() => {
                                alert(JSON.stringify(values, null, 2));
                                setSubmitting(false);
                            }, 400);
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
                                    <input
                                        type="email"
                                        name="email"
                                        className="form-dark"
                                        onChange={handleChange}
                                        onBlur={handleBlur}
                                        value={values.email}
                                    />
                                    {errors.email && touched.email && errors.email}
                                    <input
                                        type="password"
                                        name="password"
                                        className="form-dark mt-3"
                                        onChange={handleChange}
                                        onBlur={handleBlur}
                                        value={values.password}
                                    />
                                    {errors.password && touched.password && errors.password}
                                    <div className="social-auth-links mt-5">
                                        <button type="submit" className="btn btn-primary" name="login-button" tabIndex={3} disabled={isSubmitting}><i className="fas fa-user-lock" /> เข้าสู่ระบบ</button>{' '}
                                        <a className="btn btn-default" href="/site/register"><i className="fas fa-user-plus" /> ลงทะเบียน</a>
                                    </div>
                                    
                                </form>
                            )}
                    </Formik>

                </div>
            </div>

            <a className="btn btn-primary auth-link" href="/site/auth?authclient=facebook" title="Facebook" data-popup-width={860} data-popup-height={480}>Login with Facebook</a>

            {/* <form onSubmit={handleSubmit}>
                <div>
                    <input
                    className="form-control"
                        type="email"
                        placeholder="Email"
                        required
                        value={email}
                        onChange={e => setEmail(e.target.value)}
                    />
                </div>
                <div>
                    <input
                        className="input"
                        type="password"
                        placeholder="Password"
                        required
                        value={password}
                        onChange={e => setPassword(e.target.value)}
                    />
                </div>
                <div>
                    <button type="submit">Sign In</button>
                </div>
            </form> */}
        </div>
    );
};
Login.Layout = BlankLayout;
