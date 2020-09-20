export default (sequelize, DataTypes) => {
  const User = sequelize.define('User',{
      username:{
          type:DataTypes.STRING,
          allowNull:false,
          validate:{
              isAlphanumeric:{
                  args:true,
                  msg:"El username solo debe tener letras o numeros"
              },
              len:{
                  args:[4, 20],
                  msg:"El username debe tener de 4 a 20 carapteres"
              }
          }
      },
      email:{
          type:DataTypes.STRING,
          allowNull:false,
          unique:true,
          validate:{
              isEmail:{
                  args:true,
                  msg:"El email es invalido"
              }
          }
      },
      password:{
          type:DataTypes.STRING,
          allowNull:false,
      },
  })

  User.associate = models => {
      User.hasMany(models.Article,{
          foreignKey:{
              name:'authorId',
              field:'author_id'
          },
          as:'articles'
      })
  }

  return User
}