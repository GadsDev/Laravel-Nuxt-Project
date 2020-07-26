<template>
  <div class="container col-md-6 mt-5">
    <h2>Login</h2>
    <br />
    <form @submit.prevent="submit">
      <div class="form-group">
        <label>Email address</label>
        <input
          v-model.trim="form.email"
          type="email"
          class="form-control"
          placeholder="Enter email"
          autofocus
        />
        <small class="form-text text-danger" v-if="errors.email">{{errors.email[0]}}</small
        >
      </div>
      <div class="form-group">
        <label>Password</label>
        <input
          v-model.trim="form.password"
          placeholder="Enter password"
          type="password"
          class="form-control"
        />
        <small class="form-text text-danger" v-if="errors.password">{{errors.password[0]}}</small>
      </div>
      <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" />
        <label class="form-check-label">Check me out</label>
      </div>
      <button type="submit" class="btn btn-primary">Login</button>
    </form>
    <br />
    <p>Dont have account ? <nuxt-link to="/register">Register</nuxt-link></p>
  </div>
</template>

<script>
export default {
  middleware: ['guest'],
  data() {
    return {
      form: {
        email: "",
        password: ""
      }
    };
  },
  methods: {
    async submit() {
      try {
        const { data } = await this.$auth.loginWith("local", {
          data: this.form
        });
        this.$router.push({
          path: this.$route.query.redirect || "/profile"
        });
      } catch (error) {
        console.log("submit error ", error);
      }
    }
  }
};
</script>

<style></style>
