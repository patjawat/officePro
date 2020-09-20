//auth.js
// import { LOGIN, LOGOUT } from '../mutation-types'

const state = {
  auth: null
}

const mutations = {
  [LOGIN] (state, data) {
    state.auth = data.auth
  },
  [LOGOUT] (state) {
    state.auth = null
  }
}

export default {
  state,
  mutations
}