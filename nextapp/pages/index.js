import Head from 'next/head'
import styles from '../styles/Home.module.css'
import Link from 'next/link'
import { useRouter } from 'next/router'
import { useSelector, useDispatch } from 'react-redux'
import BackendLayout from "../layouts/BackendLayout";
export default function Home(props) {

  const counter = useSelector(state => state.book.numOfBooks);
  const store = useSelector(state => state);

  // const [Load, setLoad] = useState(false)
  const dispatch = useDispatch();

  return (
  <div>
<button type="button" className="btn btn-primary" onClick={()=>{
  dispatch({
    type:'THEME_LOADING'
  })
//   dispatch({
//     type: "ADD_BOOK",
//     step: 1
// })
}}>Loading...</button>
{/* {JSON.stringify(store)} */}
     
</div>

  )
}



Home.Layout = BackendLayout;