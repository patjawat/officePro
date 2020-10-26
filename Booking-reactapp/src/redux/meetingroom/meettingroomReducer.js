
import meettingroomType from './meettingroomType';

const initialState = {
    items:[],
    addBooking:[]
}

function meettingroomReducer(state = initialState, action) {
    switch (action.type) {
        case meettingroomType.GET_MEETTINGROOM:
            return {
                ...state,
                items:action.payload
            }
            case meettingroomType.ADD_BOOKING:
                return {
                    ...state,
                    addBooking:action.payload
                }
            case meettingroomType.GET_MEETTING_ROOM_ERROR:
                return {
                    ...state,
                    error:action.payload
                }
        default:
            return state;
    }
}

export default meettingroomReducer;