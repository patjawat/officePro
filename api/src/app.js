import { ApolloServer, makeExecutableSchema } from 'apollo-server'
import models from '../db/models/index'
import  resolvers from './resolvers'
import  typeDefs from './types'


const SECRET = process.env.SECRET || 'holamund';
const schema = makeExecutableSchema({
    typeDefs,
    resolvers,
})

const apollo = new ApolloServer({
    schema,
    context:{
        models,
        SECRET,
    }
});


const PORT  = process.env.PORT || '4000';

models.sequelize.sync().then(()=> {
    apollo.listen(PORT).then(({url}) => {
        console.log(`Servidor corriendo en ${url}`);
    });
})