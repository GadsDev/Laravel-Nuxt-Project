<template>
  <div class="container col-md-6 mt-5">
    <h2>Register</h2>
    <br />
    <form @submit.prevent="submit">
      <div class="form-group">
        <label>Full Name</label>
        <input     
          autofocus
          v-model.trim="form.name"     
          placeholder="Enter your name"
          type="text"
          class="form-control"          
        />
        <small class="form-text text-muted"
          >Show erros here</small
        >
      </div>
       <div class="form-group">
        <label>Email address</label>
        <input
          v-model.trim="form.email"
          type="email"
          class="form-control"
        />
        <small class="form-text text-muted"
        >Show erros here</small
        >
      </div>
      <div class="form-group">
        <label>Password</label>
        <input
          v-model.trim="form.password"
          type="password"
          class="form-control"
        />
        <small class="form-text text-muted"
        >Show erros here</small>
      </div>
      <div class="form-group form-check">
        <input type="checkbox" class="form-check-input"/>
        <label class="form-check-label">Check me out</label>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <br />
    <p>Dont have account ? <nuxt-link to="/register">Register</nuxt-link></p>
  </div>
</template>

<script>
export default {
  data(){
    return {
      form: {
        name: '',
        email: '',
        password: ''
      }
    }
  },
  methods: {
    async submit(){
      const {data} = await this.$axios.$post('register', this.form)

      await this.$auth.loginWith("local", {
        data: {
          email: this.form.email,
          password: this.form.password
        }       
      })

      this.$router.push('/')
    }
  }
};
</script>

<style></style>
