<template>
    <div class="container">
        <h1>
        Name  : {{name}}

        </h1>
        <h1>
        Count : {{ counter }}

        </h1>
        <div class="form-group">
          <label for=""></label>
          <input type="text"
            class="form-control" name="" id="" v-model="name" aria-describedby="helpId" placeholder="">
          <small id="helpId" class="form-text text-muted">Help text</small>
        </div>
        <button type="button" class="btn btn-primary" @click="CountNumber()">Count</button>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                name:'',
                counter:0
            }
        },
        mounted() {
            console.log('Component mounted.')
        },
        methods:{
            CountNumber(){
                this.counter++;
            }
        }

    }
</script>
