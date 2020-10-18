
import userType from './userType';


const initialState = {
    data:null
}

function userReducer(state = null, action) {
    switch (action.type) {
        case userType.GET_USER:
            return action.payload
            case userType.BUY_USER:
                
                return {
                    ...state,
                }
        default:
            return state;
    }
}


export default userReducer;