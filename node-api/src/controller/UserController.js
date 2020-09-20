const User = require('../../db/models/user')

module.exports = {
    async store(req,res){
        const {name,email} = req.body;
        // const user = await User.create({name,email})
        // return res.json(user)
        // return req.body;
        User.create({ firstName: "Jane", lastName: "Doe" }).then(jane => {
            console.log("Jane's auto-generated ID:", jane.id);
          });

    }
}