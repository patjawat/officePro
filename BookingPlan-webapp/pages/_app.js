import React,{useState} from "react";
import Router from 'next/router';

// add nprogress module
import NProgress from 'nprogress';
import 'nprogress/nprogress.css';

// add Redux Store
import { Provider } from 'react-redux'
import store from '../redux/store'

import LoadingScreen from '../components/loadingScreen'


// add css Style
import 'bootstrap/dist/css/bootstrap.min.css';
import 'admin-lte/dist/css/adminlte.min.css'
import '@fortawesome/fontawesome-free/css/all.min.css';
import '../styles/globals.css'

import "@fullcalendar/common/main.min.css";
import "@fullcalendar/daygrid/main.min.css";


export default function MyApp({ Component, pageProps, ...rest }) {
  
  const [loading, setLoading] = useState(false)
  
  //progress ตอนโหลดหน้าเพจ
  Router.onRouteChangeStart = (url) => {
    NProgress.start()
    setLoading(true)
  };
  
  Router.onRouteChangeComplete = (url) => {
    NProgress.done()
    setLoading(false)
  };
  
  Router.onRouteChangeError = (err, url) => {
    NProgress.done()
    setLoading(false)
  }; 

  const Layout = Component.Layout ? Component.Layout : React.Fragment;

  return (
    <Provider store={store}>
      <Layout>
        {loading ? <LoadingScreen /> : ''}
        <Component {...pageProps} />
      </Layout>
    </Provider>
  )
}
