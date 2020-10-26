import authType from './authType'
import Cookies from 'js-cookie'

const initialState = {
    // isLogin: false,
    // userId: '',
    token: Cookies.get("token"),
    // refreshToken: '',
    // expiresOn: '',
    // data: '',
    isAuthUser: Cookies.get("token") ? true : false,
    // user: JSON.parse(localStorage.getItem("user")) || {},
    isLoading: false,
    error: null,
    user:null
}

function authReducer(state = initialState, action) {
    switch (action.type) {
        case authType.USER_LOGIN:
            return {
                ...state,
                ...action.payload, 
                // isAuthUser: state.isAuthUser = true
                
            }
        case authType.USER_LOGOUT:
            return {
                ...state,
                // isAuthUser: state.isAuthUser = false
            }
        default:
            return state;
    }
}
export default authReducer;