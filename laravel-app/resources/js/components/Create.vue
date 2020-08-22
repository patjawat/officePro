<template>
    <div>
        <div class="card">
            <div class="card-header">
               + Create Product
            </div>
            <div class="card-body">
              
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div v-if="error" class="alert alert-danger form-control">
                        {{ error }}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label>ชื่อสินค้า</label>
                    <input type="text" class="form-control" v-model="name" />
                    <label>ราคา</label>
                    <input type="text" class="form-control" v-model="price" />
                  
                  
                </div>
            </div>
        </div>
            </div>
            <div class="card-footer text-muted">
                  <button
                        class="btn btn-primary mt-2"
                        @click="CreateProduct()"
                    >
                        สร้าง
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
            error: null
        };
    },
    methods: {
        CreateProduct() {
            axios
                .post("/api/products", {
                    name: this.name,
                    price: this.price,
                    // qty: this.qty
                })
                .then(response => {
                    this.$router.push("/product");
                })
                .catch(error => {
                    this.error = "something wrong";
                });
        }
    }
};
</script>