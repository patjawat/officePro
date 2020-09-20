import authType from './authType'

const initialState = {
    // isLogin: false,
    // userId: '',
    // token: '',
    // refreshToken: '',
    // expiresOn: '',
    // data: '',
    isAuthUser: !!localStorage.getItem("user"),
    user: JSON.parse(localStorage.getItem("user")) || {},
    isLoading: false,
    error: null
}

function authReducer(state = initialState, action) {
    switch (action.type) {
        case authType.USER_LOGIN:
            return {
                ...state,
                ...action.payload, 
                isAuthUser: state.isAuthUser = true
                
            }
        case authType.USER_LOGOUT:
            return {
                ...state,
                isAuthUser: state.isAuthUser = false
            }
        default:
            return state;
    }
}
export default authReducer;