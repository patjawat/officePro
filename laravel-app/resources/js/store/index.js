import Vue from 'vue';
import Vuex from 'vuex';

Vue.use(Vuex);

import currentUser from './modules/currentUser';
// import auth from './modules/auth'


export default new Vuex.Store({
    // actions: {
    //     loginUser: ({},user) =>{
          
    //         console.log(user)
    //       }
    // },
    strict: true,
    modules: {
        currentUser,
        // auth
    },
})