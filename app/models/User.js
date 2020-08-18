import { Model } from '@vuex-orm/core'

class User extends Model {
    
    static entity = 'users';

    static fields(){
        return{
            id: this.uid(),
            name:this.string(''),
            username: this.string(''),
        }
        }

        static apiConfig = {
            actions: {
              fetch: {
                method: 'get',
                url: '/api/users'
              },
              getUser:{
                method: 'get',
                url: 'https://jsonplaceholder.typicode.com/users'
              }
            }
          }
}

export default User;
