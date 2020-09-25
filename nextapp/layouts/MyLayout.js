import React, { useState,useEffect } from "react";
import { useRouter } from 'next/router'

import Header from './header'
import Sidebar from "./sidebar";
import Footer from "./footer";

export default function MyLayout({ children }) {
  const router = useRouter()
  const [user, setUser] = useState('rrrrrr9');

  useEffect(() => {
    if (user) { // will run the condition if user exists
      router.push('/login')
    }

  }, [user])
  return (
    <>
      <Header />
      <Sidebar />
      <div className="content-wrapper" style={{ minHeight: '1289.56px' }}>
        <section className="content-header">
          <div className="container-fluid">
            <div className="row mb-2">
              <div className="col-sm-6">
                <h1>Blank Page</h1>
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