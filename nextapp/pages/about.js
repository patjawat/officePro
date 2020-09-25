import React from 'react'
import { useRouter } from 'next/router'
import MyLayout from "../layouts/MyLayout";
import { useSelector, useDispatch } from 'react-redux'


export default function About() {
    const router = useRouter()
    const counter = useSelector(state => state.book.numOfBooks);
    const dispatch = useDispatch();
  
    return (
      <div>
      {JSON.stringify(counter)}
      <span onClick={() => router.push('/')}>Click me สวัสดีครับ</span>

      <button className="btn btn-success"
                onClick={() =>
                    dispatch({
                        type: "ADD_BOOK",
                        step: 1
                    })
                }
            >
                เพิ่ม + 
      </button>
      {'  '}

            <button
            className="btn btn-danger"
                onClick={() =>
                    dispatch({
                        type: "BUY_BOOK",
                        step: 1
                    })
                }
            >
                ลบ -
      </button>
      </div>

    )
  }
About.Layout = MyLayout;
