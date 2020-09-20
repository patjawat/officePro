export default  {
    Query:{
        allArticle:(_,args,{models}) => {
            return models.Article.findAll({
                include:[{
                    model:models.Tag,
                    as:'tags'
                }]
            })
        }
    },
    Mutation:{
        newArticle:(_,args, {models}) =>{
            return models.Article.create(args,{
                include:[{
                    model:models.Tag,
                    as:'tags'
                }]
            })
        }
    }
}