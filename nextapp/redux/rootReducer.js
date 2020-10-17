import { combineReducers } from 'redux'


import authReducer from './auth/authReducer'
import themeReducer from './themes/themeReducer'
import bookReducer from './book/bookReducer'
import userReducer from './user/userReducer'

const rootReducer = combineReducers({
  auth:authReducer,
  theme:themeReducer,
  book:bookReducer,
  user:userReducer
})

export default rootReducer;