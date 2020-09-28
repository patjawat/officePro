import React, { useState,useEffect } from "react";
import { useRouter,withRouter } from 'next/router'
import { useSelector, useDispatch } from 'react-redux'
import Cookies from 'js-cookie'
import dynamic from 'next/dynamic'
// import axios from "axios";
import axios from '../axios.config';
import Header from './header'
import Sidebar from "./sidebar";
import Footer from "./footer";
import api from '../services/api'

export default function BackendLayout({ children }) {
  const router = useRouter()
  const store = useSelector(state => state);
  const [user, setUser] = useState(null)
  const token = Cookies.get('token')
  
  useEffect( async () => {
    try {
     
            if (token) {
                // try {
                //  axios.get('http://localhost:8000/api/numbers',{
                //    headers:{
                //     Authorization:token
                //    }
                //  }).then((res)=>{
                //    console.log(res.data);

                //  });
                const { data: user } = await api.get('numbers')
                // if (user) setUser('111');
                // } catch (error) {
                //   // setErrorMessage(error.message);
                // }
            }else{
            router.push('/login')
            }
    } catch (error) {
      
    }
      
  }, [])

  return (
    <>
      <Header />
      <Sidebar />
      <div className="content-wrapper" style={{ minHeight: '1289.56px' }}>
        <section className="content-header">
          <div className="container-fluid">
            <div className="row mb-2">
              <div className="col-sm-6">
                <h1>Blank Page {router.pathname}</h1>
              </div>
              <div className="col-sm-6">
                <ol className="breadcrumb float-sm-right">
                  <li className="breadcrumb-item"><a href="#">Home</a></li>
                  <li className="breadcrumb-item active">Blank Page</li>
                </ol>
              </div>
            </div>
          </div>
        </section>
        <section className="content">
          {children}
        </section>
      </div>
      <Footer />
    </>
  )
}