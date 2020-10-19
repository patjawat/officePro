import React, { useState, useEffect } from 'react'
import * as rdd from 'react-device-detect';
import { useSelector, useDispatch } from 'react-redux'
import ContentHeader from '../layouts/contentHeader'
import Booking from '../components/booking'
function Index() {
  const [currentData, setCurrentData] = useState([]);

  return (
    <ContentHeader title="รายการขอใช้ห้องประชุม">
      <Booking />
    </ContentHeader>

  );
}

export default Index
