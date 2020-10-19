import { combineReducers } from 'redux'

import bookReducer from './book/bookReducer'
import authReducer from './auth/authReducer'
import meettingroomReducer from './meetingroom/meettingroomReducer'

const rootReducer = combineReducers({
  book:bookReducer,
  auth:authReducer,
  meettingroom:meettingroomReducer
})

export default rootReducer;