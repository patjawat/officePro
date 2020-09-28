import { combineReducers } from 'redux'

import bookReducer from './book/bookReducer'
import authReducer from './auth/authReducer'
import themeReducer from './themes/themeReducer'

const rootReducer = combineReducers({
  book:bookReducer,
  auth:authReducer,
  theme:themeReducer,
})

export default rootReducer;