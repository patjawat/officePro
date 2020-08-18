export default (sequelize, DataTypes) => {
  const Article = sequelize.define('article',{
      title:{
          type:DataTypes.STRING,
          allowNull:false,
      },
      body:{
          type:DataTypes.STRING,
          allowNull:false,
      },
      image:{
          type:DataTypes.STRING,
      },
      published:{
          type:DataTypes.BOOLEAN,
          default:false
      },
  })

  Article.associate = models => {
      Article.hasMany(models.Tag,{
          foreignKey:{
              name:'articleId',
              field:'article_id'
          },
          as:'tags',
          onDelete:'CASCADE',
          onUpdate:'CASCADE'
      })
  }

  return Article
}