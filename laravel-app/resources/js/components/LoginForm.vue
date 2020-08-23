<template>
  <div>
     
<h1>{{user}}</h1>
                        <div class="form-group row">
                            <label for="username" class="col-md-4 col-form-label text-md-right">Username</label>

                            <div class="col-md-6">
                                <input id="username" type="username" v-model="user.email"  class="form-dark @error('username') is-invalid @enderror" name="username"  required autocomplete="username" autofocus>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" v-model="user.password" class="form-dark @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            </div>
                        </div>

                      

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary" @click="login">
                                    Login
                                </button>

                            </div>
                        </div>
                    </div>
</template>

<script>
export default {
data() {
    return {
        user:{
            email: "",
            password: "",
        }
    }
},
methods: {
    login() {
            this.$store.dispatch('loginUser',this.user);
    }
},
computed: {
    user:{
        get() {
            return this.$store;
        }
    }
}
}
</script>

<style>

</style>