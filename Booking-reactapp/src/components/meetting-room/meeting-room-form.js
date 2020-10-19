import React, { useState, useEffect } from "react";
import { useForm } from "react-hook-form";
import { useSelector, useDispatch } from 'react-redux'
import axios from '../../axios.config'

export default function MeetingRoomForm() {
  const store = useSelector(state => state.meettingroom);
  const dispatch = useDispatch();

  const { register, handleSubmit, watch, errors } = useForm();
  const onSubmit = async (data, e) => {
    let res = await axios.post('/meetting-room', data);
    e.target.reset();
    console.log(res.data);
    getMeettingRoom()

  };

  useEffect(() => {
    (async () => {
      const res = await axios.get("meetting-room");
      dispatch({
        type: 'GET_MEETTINGROOM',
        payload: res.data
      })
    })();
  }, []);


  const getMeettingRoom = async () => {
    const res = await axios.get("meetting-room");
    dispatch({
      type: 'GET_MEETTINGROOM',
      payload: res.data
    })
  }

  return (
    <form onSubmit={handleSubmit(onSubmit)}>
      <div className="card my-3">
        <div className="card-header">
          แบบฟอร์มจัดการห้องประชุม
        </div>
        <div className="card-body">
          <div className="form-group">
            <label htmlFor="exampleInputEmail1">ชื่อห้องประชุม</label>
            <input name="name" className="form-control" ref={register} placeholder="ระบุชื่อห้องประชุม" />
          </div>
          <div className="form-group">
            <label htmlFor="exampleInputEmail1">รายละเอียดเพิ่มเติม</label>
            <input name="description" className="form-control" ref={register({ required: true })} placeholder="ระบุรายละเอียดเพิ่มเติม" />
            {errors.exampleRequired && <span>This field is required</span>}
          </div>
        </div>
        <div className="card-footer text-muted">
          <button type="submit" className="btn btn-success"><i class="fas fa-check"></i> บันทึก</button>
        </div>
      </div>
    </form>

  )
}
