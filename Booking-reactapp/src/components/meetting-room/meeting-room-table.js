import React from "react";
import { Button } from "reactstrap"
import config from '../../global.config'
export default function MeetingRoomTable({items,handleRemoveItem,editItem,setViewPhoto}) {

  const url = config.env.image_url;
  return (
    <>
      {items.map((item, i) =>
        <ul className="list-unstyled mt-3" key={i}>
          <li className="row">
            <a href="#" className="col-md-4">
      {item.photo ? <img src={url+'rooms/'+item.photo} style={{width:'250px',height:'200px'}} /> : <img src="https://via.placeholder.com/250x200/5fa9f8/ffffff" alt="Image" className="rounded img-fluid" /> }
            </a>
            <div className="col-md-7">
              <a href="#">
                <h6 className="mb-3 h5 text-dark">{item.name}</h6>
              </a>
              <div className="d-flex text-small">
                <a href="#">Business</a>
                <span className="text-muted ml-1">{item.description}</span>
              </div>
              <div className="text-small mt-4">
      <Button id={item.id} name={item.name} photo={item.photo} size="sm" color="warning" onClick={editItem}><i class="far fa-edit"></i> แก้ไข</Button>{'   '}
                <span id={item.id} name={item.name} onClick={handleRemoveItem} className="btn btn-sm btn-danger"><i class="far fa-trash-alt"></i> ลบ</span>
              </div>
            </div>
          </li>
        </ul>
      )
      }
    </>
  )
}

