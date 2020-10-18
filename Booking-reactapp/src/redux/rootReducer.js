import { combineReducers } from 'redux'

import bookReducer from './book/bookReducer'
import authReducer from './auth/authReducer'

const rootReducer = combineReducers({
  book:bookReducer,
  auth:authReducer
})

export default rootReducer;