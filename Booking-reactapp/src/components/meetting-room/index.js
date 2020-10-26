import React, { useState, useEffect } from "react";
import { useSelector } from 'react-redux'
import { Row, Col } from 'reactstrap';
import MeetingRoomForm from './meeting-room-form';
import MeetingRoomTable from './meeting-room-table';
import axios from "../../axios.config";
import withReactContent from 'sweetalert2-react-content'
import Swal from 'sweetalert2'
import MeettingRoom from '../../services/MeettingRoomService'

export default function Index() {
  // const store = useSelector(state => state);
  // const items = useSelector(state => state.meettingroom.items);

  const [editing, setEditing] = useState(false);


  const initialItem = { id: null, name: '', description: '',photo:'' };
  const [currentItem, setCurrentItem] = useState(initialItem);
  const [rooms, setRooms] = useState([])
  const [list, updateList] = useState([]);
  const MySwal = withReactContent(Swal)


  useEffect(() => {
    (async () => {
      await getItem()
    })();
  }, []);

  async function getItem() {
    const res = await MeettingRoom.getMeettingRoom()
    setRooms(res.data.rooms)
    updateList(res.data)
  }

  const handleRemoveItem = (e) => {
    const id = e.target.getAttribute("id")
    const name = e.target.getAttribute("name")
    Swal.fire({
      title: 'ลบ '+name+' ?',
      showCancelButton: true,
      confirmButtonText: `ยืนยัน`,
    }).then((result) => {
      if (result.isConfirmed) {
        MeettingRoom.deleteMeettingRoom(id).then(() => {
            setRooms(rooms.filter(item => item.name !== name));
            handleCancel()
          })
      } else if (result.isDenied) {
        Swal.fire('Changes are not saved', '', 'info')
      }
    })
  };

  const editItem = async (e) => {
    const id = e.target.getAttribute("id")
    await setEditing(true);
    await setCurrentItem(rooms.filter(item => item.id == id)[0])
  }

  const handleCancel = (e) => {
    setEditing(false);
    setCurrentItem(initialItem)
  }

  return (
    <div>
      <Row>
        <Col lg="4" md="4" sm="6" >
          <MeetingRoomForm
            items={rooms}
            setRooms={setRooms}
            currentItem={currentItem}
            handleRemoveItem={handleRemoveItem}
            editing={editing}
            editItem={editItem}
            setEditing={setEditing}
            handleCancel={handleCancel}
            getItem={getItem}
          />
        </Col>
        <Col lg="8" md="8" sm="6">
          <MeetingRoomTable
            items={rooms}
            setRooms={setRooms}
            handleRemoveItem={handleRemoveItem}
            editItem={editItem}
          />
        </Col>
      </Row>
    </div>
  )
}


