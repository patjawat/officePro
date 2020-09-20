
import React from 'react'
import { useSelector, useDispatch } from 'react-redux'

function Book() {
    const counter = useSelector(state => state.book.numOfBooks);
    const dispatch = useDispatch();

    return (
        <div>
            <h1 className="text-center text-primary">ร้านหนังสือ {counter}</h1>
            <h2>Number of books {counter}</h2>
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
export default Book;

