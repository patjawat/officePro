import { Model } from '@vuex-orm/core'

class Post extends Model {
    
    static entity = 'post';

    static fields(){
        return{
            id: this.uid(),
            title:this.string('')
        }
        }
}

export default Post;
