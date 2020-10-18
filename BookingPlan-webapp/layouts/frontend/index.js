import React from 'react'
import Link from 'next/link'
import { useRouter } from 'next/router'
import { useSelector, useDispatch } from 'react-redux'
import Cookies from 'js-cookie'
import Header from './header'
export default function Index({ children }) {
  const store = useSelector(state => state);
  const username = store.user ? store.user.profile.name : null;

  const dispatch = useDispatch();
  const router = useRouter()

  return (
    <>
      <Header />
      <div className="container mt-5">
        {children}
      </div>
    </>

  )
}
