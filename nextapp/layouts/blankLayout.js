import React, { useState,useEffect } from "react";
import { useRouter } from 'next/router'

export default function BlankLayout({ children }) {
  return (
    <>
    <div className="container_blank">
          {children}
    </div>
    </>
  )
}