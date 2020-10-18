import React from 'react'
import {useSelector,useDispatch} from 'react-redux'

function Demo1() {
    const counter = useSelector(state => state.book.numOfBooks);
    const test = useSelector(state => state);
    const dispatch = useDispatch();

    return (
        <div>
             <h1>{counter}</h1>
             <br />
             {JSON.stringify(test)}
             <br />

      <button
        onClick={() =>
          dispatch({
            type: "ADD_BOOK",
            step: 1
          })
        }
      >
        Increment
      </button>

      <button
        onClick={() =>
          dispatch({
            type: "BUY_BOOK",
            step: 1
          })
        }
      >
        Increment ---
      </button>
        </div>
    )
}
export default Demo1
