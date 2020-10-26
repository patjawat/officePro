import React, { useState, useEffect } from 'react'
import { Button, Card } from "antd";
import FormCategory from './formCategory'
import Axios from '../../services/CategoryService'
import ListItems from './ListItems'

export default function Index({ title, type }) {

  const [category, setCategory] = useState([])

  async function getItem() {
    const res = await Axios.getCategory();
    setCategory(res.data)
  }

  useEffect(() => {
    (async () => {
      await getItem();
    })();
  }, []);

  return (
    <div className="site-card-border-less-wrapper">
      <div className="row">
        <div className="col-6">
          <FormCategory type={type} items={category} setCategory={setCategory} />
        </div>
      </div>
      <br/>
      <ListItems data={category} />
      {/* </Card> */}
    </div>
  )
}
