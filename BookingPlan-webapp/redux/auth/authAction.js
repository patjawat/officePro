import authType from './authType'

export function login(){
    return{
        type:authType.USER_LOGIN
    }
}

export function logout(){
    return{
        type:authType.USER_LOGOUT
    }
}