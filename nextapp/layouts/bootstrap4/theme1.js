import React, { useEffect } from "react";
import { useRouter } from 'next/router'
import { useSelector, useDispatch } from 'react-redux'
import Cookies from 'js-cookie'
import axios from '../../axios.config';
import Header from './header'

export default function AdminLte3({ children }) {
  const router = useRouter()
  const dispatch = useDispatch();
  const store = useSelector(state => state);
  const token = Cookies.get('token')


  useEffect(() => {
    (async () => {
      // ตรวจสอบ user Login
      if(!token){
        router.push('/login')
      }

      if (!store.user) {
        const { data } = await axios.get('user')
        dispatch({type: 'GET_USER',payload: data});
      } 
      // จบดารตรวจสอบ User login
    })();

  }, []);


  return (
    <div className="container_bg">
      <Header />
     <div className="container mt-4">
          {children}
   </div>
   </div>
  )
}