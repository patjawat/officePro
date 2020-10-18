import authType from './authType'
// import Cookies from 'js-cookie';
const initialState = {
    // isLogin: false,
    // userId: '',
    // token: localStorage.getItem("token"),
    // refreshToken: '',
    // expiresOn: '',
    // data: '',
    // isAuthUser: localStorage.getItem("token") ? true : false,
    // user: JSON.parse(localStorage.getItem("user")) || {},
    isLoading: false,
    error: null,
    user:null,
    // token:null Cookies.get('token') ? Cookies.get('token') : null
    // token: localStorage ? localStorage.getItem("token") : null
}

function authReducer(state = initialState, action) {
    switch (action.type) {
        case authType.USER_LOGIN:
            return {
                ...state,
                ...action.payload, 

                
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