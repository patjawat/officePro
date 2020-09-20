
const userController = require('../controller/User');
const postController = require('../controller/Post');

module.exports = (app) => {
    app.get('/api',(req,res) => res.status(200).send({
        message:'Welcome To API'
    }));


    app.get('/api/users',userController.getAllUsers);

    app.post('/api/user/create',userController.create);

    app.put('/api/user/:userId',userController.update);

    app.get('/api/:userId/posts',postController.getAllPostsOfUser);

    app.post('/api/post/create',postController.createPost);

    app.put('/api/:postId',postController.update);

}