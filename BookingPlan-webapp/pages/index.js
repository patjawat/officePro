import Head from 'next/head'
import styles from '../styles/Home.module.css'
import Link from 'next/link'
import { useRouter } from 'next/router'
import { useSelector, useDispatch } from 'react-redux'
import Theme from "../layouts/frontend";
import FullCalendar from '../components/fullcalendar'
// import Theme from "../layouts/adminle3";
export default function Home(props) {

  const counter = useSelector(state => state.book.numOfBooks);
  const store = useSelector(state => state);

  // const [Load, setLoad] = useState(false)
  const dispatch = useDispatch();

  return (
    <div>

{/* {/* <FullCalendar defaultView='dayGridMonth' /> */}
      <FullCalendar defaultView='timeGridWeek' />
   
        
    </div>


  )
}



Home.Layout = Theme;