<template>
    <div class="container">
       <h1>Site Components</h1>
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
