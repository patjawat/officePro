import React,{useState} from "react";
import { useForm} from "react-hook-form";

import axios from '../../axios.config'
import config from '../../global.config'
import MeettingRoom from '../../services/MeettingRoomService'

export default function MeetingRoomForm({setRooms,items,editing,handleCancel,currentItem,getItem}) {
  const url = config.env.image_url;

  const {id,name,description,photo} = currentItem;
  const { register, handleSubmit, errors } = useForm();
  const [selectFile, setSelectFile] = useState(null);
  const [imgData, setImgData] = useState(null);
  const [picture, setPicture] = useState(null);


  const onSubmit = async (value, e) => {
    const data = new FormData()
    data.append('file',selectFile)
    data.append('name',value.name)
    data.append('description',value.description)

    if(editing){
      let res =  await MeettingRoom.updateMeettingRoom(id,data);
      e.target.reset();
      setRooms([...items, res.data]);
      handleCancel()
      getItem()
    }else{
      let res = await axios.post('/meetting-room', data);
      e.target.reset();
      setRooms([...items, res.data]);
      setImgData(null)
      handleCancel()
    }
  };

  const onChangeHandler=(e)=>{
    setSelectFile(e.target.files[0])
    if (e.target.files[0]) {
      console.log("picture: ", e.target.files);
      setPicture(e.target.files[0]);
      const reader = new FileReader();
      reader.addEventListener("load", () => {
        setImgData(reader.result);
      });
      reader.readAsDataURL(e.target.files[0]);
    }
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
            <input name="name" className="form-control" ref={register} defaultValue={name} placeholder="ระบุชื่อห้องประชุม" />
          </div>
          <div className="form-group">
            <label htmlFor="exampleInputEmail1">รายละเอียดเพิ่มเติม</label>
            <input name="description" className="form-control" ref={register({ required: true })} defaultValue={description} placeholder="ระบุรายละเอียดเพิ่มเติม" />
            {errors.exampleRequired && <span>This field is required</span>}
          </div>
          <input type="file" name="file" onChange={onChangeHandler} ref={register}/>

          <div className="previewProfilePic">
               { imgData ? <img className="playerProfilePic_home_tile" src={imgData} /> : ''}
               {photo ?  <img className="playerProfilePic_home_tile" src={url+'rooms/'+photo} /> :'' }
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
