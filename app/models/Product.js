import { Model } from '@vuex-orm/core';

class Product extends Model {
  static entity = 'product';

  static fields() {
    return {
      id: this.uid(),
      name: this.attr(null),
      codename: this.attr(null),
      price: this.attr(null),
      sale: this.attr(null),
      product_group_id: this.attr(null),
    }
  }


  static apiConfig = {
    actions: {
      fetch: {
        method: 'get',
        url: '/api/users'
      },
      getProduct: {
        method: 'get',
        url: '/products',
      },
      async  save(data) {

        return new Promise((resolve, reject) => {
          this.axios.post('products', data).then((res) => {
            resolve({})
          })
        });
      }

    }



  }

  static beforeCreate(model) {
    // Do domething.
    console.log('beforeCreate');
    // getProduct();

  }

}
export default Product;