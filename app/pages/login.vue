<template>
  <div class="container">
    <!-- {{  Cookies.get('name')}} -->
    <div class="row login-container">
      <div class="col-6 offset-md-1 offset-lg-4">
        <div class="card shadow-lg p-3 mb-5 bg-white rounded">
          <h3>Login Page</h3>
          <div class="card-body">
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                placeholder="Please enter username"
                aria-describedby="helpId"
                v-model="form.username"
              />
              <input
                type="text"
                class="form-control"
                placeholder="Password"
                aria-describedby="helpId"
                v-model="form.password"
              />
            </div>
            <button @click="postLogin" class="btn btn-primary">login</button>

            <p>The credentials are not.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import Cookies from "js-cookie";

export default {
  layout: "blank",
  middleware: "notAuthenticated",
  data() {
    return {
      form: {
        username: "admin",
        password: "112233"
      },
      show: true
    };
  },
  methods: {
    postLogin() {
      this.$apollo
        .mutate({
          mutation: require("../gql/mutation/users").login,
          variables: {
            username: this.form.username,
            password: this.form.password
          }
        })
        .then(res => {
          console.log(res.data.login);
          const auth = res.data.login.token;
          this.$store.commit("setAuth", auth); // mutating to store for client rendering
          Cookie.set("auth", auth); // saving token in cookie for server rendering
          this.$router.push("/");
        })
        .catch(err => {
          console.log(err);
        });
    }
  }
};
</script>
<style scoped>
.form-group > input {
  margin-bottom: 10px;
}
.login-container {
  margin-top: 10%;
}
</style>

