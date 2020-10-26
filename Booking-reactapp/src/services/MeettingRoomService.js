import axios from '../axios.config'

class MeettingRoomService{
    getMeettingRoom(){
        return axios.get("meetting-room");
    }
    getMeettingRoomById(id){
        return axios.put('/meetting-room/'+id);
    }
    updateMeettingRoom(id,data){
        return axios.put('/meetting-room/'+id, data);
    }
    deleteMeettingRoom(id){
        return axios.delete('/meetting-room/'+id);
    }
   
}

export default new MeettingRoomService;