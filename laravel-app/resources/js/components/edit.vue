<template>
    <div>
        <div class="card">
            <div class="card-header">
               + Create Product
            </div>
            <div class="card-body">
              
            <div class="row">
                <div class="col-md-12">
                    <label>Name</label>
                    <input type="text" class="form-control" v-model="name" />
                    <input type="text" class="form-control" v-model="price" />
                    <!-- <label>Price</label>
                    <input type="number" class="form-control" v-model="price" />
                    <label>Qty</label>
                    <input type="number" class="form-control" v-model="qty" /> -->
                  
                </div>
            </div>
        </div>
            <div class="card-footer text-muted">
                   <button
                        class="btn btn-primary form-control mt-2"
                        @click="UpdateProduct()"
                    >
                        แก้ไข
                    </button>
                    </button>
            </div>
        </div>
        </div>
</template>

<script>
export default {
    data() {
        return {
            name: "",
            price: "",
            // qty: "",
            error: null,
            product:[]
        };
    },
    methods: {
        UpdateProduct() {
            axios
                .put("/api/products/" + this.$route.params.id, {
                    name: this.name,
                    price: this.price,
                })
                .then(response => {
                    this.$router.push("/product");
                })
                .catch(error => {
                    this.error = "something wrong";
                });
        },
        getProduct(){
              axios.get('/api/products/'+ this.$route.params.id).then(function(response){
                var product = response.data.data
                this.name = product.name
                this.price = product.price

                }.bind(this));
        }

    },
     mounted: function(){
this.getProduct();
     }
};
</script>