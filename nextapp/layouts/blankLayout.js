import React, { useState,useEffect } from "react";
import { useRouter,withRouter } from 'next/router'
import axios from 'axios'
export default function BlankLayout({ children }) {

  const [data, setData] = useState({ courses: [] });
    
  useEffect(() => {
      (async () => {
          const result = await axios.get(
              "https://jsonplaceholder.typicode.com/posts"
          );
          setData(result.data);
      })();
  }, []);
      
  console.log(data);

  return (
    <>
    <div className="container_blank">
          {children}
    </div>
    </>
  )
}