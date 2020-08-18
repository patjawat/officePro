export default {
    Query: {
        allProduct: (_, args, { models }) => {
            return models.Product.findAll()
        },
        getProduct: (root, { id }, { models }) => {
            return models.Product.findByPk(id)
        },
    },
    Mutation: {
        createProduct: (_, args, { models }) => {
            return models.Product.create(args)
        },
        updateProduct: (root,  { id,name,price },{ models }) => {
            return models.Product.update({
                    name: name,
                    price: price
                },
                {
                    where: {
                        id: id
                    }
                });
            },
            deleteProduct: (root, {id}, { models }, info) =>{
                models.Product.destroy({
                    where: {
                        id: id
                    }
                });
            },
        },
    
}
