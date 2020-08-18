import Cookies from 'js-cookie'
export default function ({ store, redirect }) {
    if (!store.state.auth) {
      return redirect('/login')
    }
  }
  