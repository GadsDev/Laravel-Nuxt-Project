<template>
  <div class="container col-md-6 mt-5">
    <h2>Login</h2>
    <br>
    <form @submit.prevent="submit">
      <div class="form-group">
        <label>Email address</label>
        <input
          v-model="form.email"
          type="email"
          class="form-control"
          aria-describedby="emailHelp"
          placeholder="Enter email"
          autofocus
        />
        <small id="emailHelp" class="form-text text-muted"
          >Show erros here</small
        >
      </div>
      <div class="form-group">
        <label>Password</label>
        <input
          v-model="form.password"
          placeholder="Enter password"
          type="password"
          class="form-control"
        />
      </div>
      <div class="form-group form-check">
        <input type="checkbox" class="form-check-input"/>
        <label class="form-check-label">Check me out</label>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
     <br>
     <p>Dont have account ? <nuxt-link to="/register">Register</nuxt-link></p>
  </div>
</template>

<script>
export default {
  data(){
    return {
      form: {
        email: '',
        password: ''
      }
    }
  },
  methods: {
    async submit(){
      // const response = await this.$axios.$post('http://localhost:8000/api/login', this.form)
      // console.log("response", response);
      const { data } = await this.$auth.loginWith("local", {
        data: this.form
      })
   
      this.$router.push('/')
    }
  }
};
</script>

<style></style>
