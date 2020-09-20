import React, { useState, useEffect } from 'react'
import * as rdd from 'react-device-detect';
import { useSelector, useDispatch } from 'react-redux'

import axios from 'axios'
import { api } from '../service/config'



function Home() {
  const [customer, setCustomer] = useState();
  const isAuthUser = useSelector(state => state.auth);

  const getCustomer = async () => {
    try {
      let res = await axios.get(api.url + 'customers');
      let { data } = res.data;
      setCustomer(res.data);
    } catch (error) {
      console.log(error) //{config:{...}}
    }
  };
  const getNumber = async () => {
    try {
      let res = await axios.get(api.url + 'numbers');
      let { data } = res.data;
      setCustomer(res.data);
    } catch (error) {
      console.log(error) //{config:{...}}
    }
  };

  return (
    <div>
      <h5>
        Device :
            {/* {JSON.stringify(rdd, null, 5)} */}
        {JSON.stringify(isAuthUser)}
      </h5>
      <button type="button" class="btn btn-primary" onClick={getCustomer}>load</button>
      <button type="button" class="btn btn-primary" onClick={getNumber}>get Number</button>
      <button className="btn btn-primary" onClick={() => setCustomer(1)}>Click + </button>{' '}


    </div>
  )
}



export default Home

