import themeType from './themeType'

const initialState = {
    isLoading: false,
}

function authReducer(state = initialState, action) {
    switch (action.type) {
        case themeType.THEME_LOADING:
            return {
                ...state,
                isLoading:true
                
            }
        case themeType.THEME_COMPLATE:
            return {
                ...state,
                isLoading:false
            }
        default:
            return state;
    }
}
export default authReducer;