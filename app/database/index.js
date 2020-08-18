import { Database } from '@vuex-orm/core'
import Post from '@/models/Post';
import Product from '@/models/Product';

const database = new Database()

database.register(Post)
database.register(Product)

export default database