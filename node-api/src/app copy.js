const express = require('express');
const app = express();
const models = require('../db/models');

models.sequelize.sync().then(function() {
    console.log('Nice! Database')
}).catch(function(err) {
    console.log(err,'Database')
})

app.use(express.json())


require('./routes')(app);

app.get('*',(req,res) => res.status(200).send({
    message: 'WEllcome'
}))

app.listen(3333)