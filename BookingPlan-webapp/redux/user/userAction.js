import userType from './userType';
import { useSelector, useDispatch } from 'react-redux'

// import axios from '../../axios.config';
// // const dispatch = useDispatch();

// export  function getUser() {

//         // const { data } = await axios.get('user')
//         // alert(JSON.stringify(data));

    
//     return { 
//         type: userType.GET_USER,
//         // payload: data
//      }
// }

export function addBook() {
    return { type: userType.GET_USER }
}

export function buyBook() {
    return { type: userType.BUY_BOOK }
}

