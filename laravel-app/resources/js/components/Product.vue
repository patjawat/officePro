<template>
    <div>
      <router-link to="/create" class="btn btn-primary">+ Create</router-link>
<div class="card mt-3">
              <div class="card-header">
                <h3 class="card-title">Striped Full Width Table</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th style="width: 70%">ชื่อ</th>
                      <th >ราคา</th>
                      <th style="width: 40px">ดำเนินการ</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr v-for="item in rows.data">
                      <td>{{ item.name }}</td>
                      <td>
                        {{ item.price }}
                      </td>
                      <td>

                          <router-link :to="'/edit/' + item.id" class="btn btn-warning">Edit</router-link>
                          <button type="button" class="btn btn-danger" @click="deleteProduct(item.id)">Delete</button>
                      </td>
                    </tr>
                
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
    </div>
</template>

<script>
export default {
   data(){
            return {
                rows: [],
                columns: [
                        {label: 'id', field: 'id'}, 
                        // {label: 'Name', field: 'name'},
                        // {label: 'Price', field: 'price'}
                    ],
                page: 1,
                per_page: 10,
            }
        },
    methods:{
            getPosts: function() {
                axios.get('/api/products').then(function(response){
                    this.rows = response.data;
                }.bind(this));
            },
            deleteProduct(id){
                if (confirm('Are you sure?')) {
                 axios.delete('/api/products/'+id).then(function(response){
                   this.getPosts()
                }.bind(this));
                } else {
                console.log('Canceled');
                }
            }
           
        },
        created: function(){
            this.getPosts()
        }
};
</script>