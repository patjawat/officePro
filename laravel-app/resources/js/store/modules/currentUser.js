const state = {
    user: {},
    color:'red'
  }
  const getters = {};
  const actions = {
    loginUser: ({},user) =>{
      state.color
      axios.post('/api/login',{
        email:user.email,
        password:user.password
      }).then(res =>{
        const token = res.data.token
        const user = res.data.user
        localStorage.setItem('token', token)
        axios.defaults.headers.common['Authorization'] = token
        // commit('auth_success', token, user)
        // resolve(resp)
        window.location.replace('/home');
      })
      // console.log(user.email);
    }
  };
  const mutations = {};

  export default {
    state,
    getters,
    actions,
    mutations
  }