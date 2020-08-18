// store/index.js

import Veux from 'vuex'
import VuexORM from '@vuex-orm/core'
import VuexORMAxios from '@vuex-orm/plugin-axios'
import VuexORMGraphQL from '@vuex-orm/plugin-graphql';
import User from '@/models/User'
import Post from '@/models/Post'
import Product from '@/models/Product'

const database = new VuexORM.Database()

VuexORM.use(VuexORMAxios) // <- No axios option.
VuexORM.use(VuexORMGraphQL, { database });


database.register(User)
database.register(Post)
database.register(Product)

export const plugins = [VuexORM.install(database)]