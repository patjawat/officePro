import React,{useRef, useEffectf} from "react";
import { useForm } from "react-hook-form";
import { useSelector } from 'react-redux'
import axios from '../../axios.config'

export default function MeetingRoomForm({setRooms,items,editing,handleCancel,currentItem,getItem}) {
  const {id,name,description} = currentItem;
  const { register, handleSubmit, watch, errors } = useForm();
  const inputRef = useRef();

  const onSubmit = async (data, e) => {
    if(editing){
      let res = await axios.put('/meetting-room/'+id, data);
      e.target.reset();
      setRooms([...items, res.data]);
      handleCancel()
      getItem()
    }else{
      let res = await axios.post('/meetting-room', data);
      e.target.reset();
      setRooms([...items, res.data]);
      handleCancel()
    }
  };

  return (
    <form onSubmit={handleSubmit(onSubmit)}>
      <div className="card my-3">
        <div className="card-header">
          แบบฟอร์มจัดการห้องประชุม
        </div>
        <div className="card-body">
          <div className="form-group">
            <label htmlFor="exampleInputEmail1">ชื่อห้องประชุม</label>
            <input name="name" className="form-control" ref={register} defaultValue={name} placeholder="ระบุชื่อห้องประชุม" />
          </div>
          <div className="form-group">
            <label htmlFor="exampleInputEmail1">รายละเอียดเพิ่มเติม</label>
            <input name="description" className="form-control" ref={register({ required: true })} defaultValue={description} placeholder="ระบุรายละเอียดเพิ่มเติม" />
            {errors.exampleRequired && <span>This field is required</span>}
          </div>
        </div>
        <div className="card-footer text-muted">
          {editing ? <button type="submit" className="btn btn-warning"><i class="far fa-edit"></i> แก้ไข</button> : <button type="submit" className="btn btn-success"><i class="fas fa-check"></i> บันทึก</button>}{' '}
       <span className="btn btn-secondary" onClick={handleCancel}><i class="fas fa-redo-alt"></i> ยกเลิก</span>
        </div>
      </div>
    </form>
  )
}
