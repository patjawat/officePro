import React, { useState, useEffect } from "react";
import { Button } from "reactstrap"
import { useForm } from "react-hook-form";
import { useSelector, useDispatch } from 'react-redux'
import Swal from 'sweetalert2'
import withReactContent from 'sweetalert2-react-content'
import axios from "../../axios.config";
export default function MeetingRoomTable() {
  const [data, setData] = useState({ courses: [] });
  const items = useSelector(state => state.meettingroom.items);
  const dispatch = useDispatch();

  const MySwal = withReactContent(Swal)


  useEffect(() => {
    (async () => {

    })();
  }, []);


  async function getItem() {
    const res = await axios.get("meetting-room");
    dispatch({
      type: 'GET_MEETTINGROOM',
      payload: res.data
    })
  }

  async function itemEdit(i) {
    const res = await axios.get("meetting-room");
    dispatch({
      type: 'GET_MEETTINGROOM',
      payload: res.data
    })
  }

  return (
    <>
      {items.map((item, i) =>
        <ul className="list-unstyled mt-3">
          <li className="row">
            <a href="#" className="col-2">
              <img src="https://via.placeholder.com/200x200/5fa9f8/ffffff" alt="Image" className="rounded img-fluid" />
            </a>
            <div className="col-8">
              <a href="#">
                <h6 className="mb-3 h5 text-dark">{item.name}</h6>
              </a>
              <div className="d-flex text-small">
                <a href="#">Business</a>
                <span className="text-muted ml-1">{item.description}</span>
              </div>
              <div className="text-small mt-4">
                <Button size="sm" color="warning"><i class="far fa-edit"></i> แก้ไข</Button>{'   '}
                <Button size="sm" color="danger" onClick={async () => {
                  Swal.fire({
                    title: 'Do you want to save the changes?',
                    showDenyButton: true,
                    showCancelButton: true,
                    confirmButtonText: `Save`,
                    denyButtonText: `Don't save`,
                  }).then((result) => {
                    if (result.isConfirmed) {
                      axios.delete('meetting-room/' + item.id).then(() => {
                        Swal.fire('Saved!', '', 'success')
                        getItem()
                      })
                    } else if (result.isDenied) {
                      Swal.fire('Changes are not saved', '', 'info')
                    }
                  })
                }}><i class="far fa-trash-alt"></i> ลบ</Button>
              </div>
            </div>
          </li>
        </ul>
      )
      }

    </>
  )
}

