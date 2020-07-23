<template>
  <div class="container col-md-6 mt-5">
    <h2>Register</h2>
    <br />
    <form>
      <div class="form-group">
        <label for="exampleInputEmail1">Full Name</label>
        <input
          placeholder="Enter your name"
          type="text"
          class="form-control"
          id="exampleInputFullName1"
          aria-describedby="fullNameHelp"
        />
        <small id="fullNameHelp" class="form-text text-muted"
          >Show erros here</small
        >
      </div>
       <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input
          type="email"
          class="form-control"
          id="exampleInputEmail1"
          aria-describedby="emailHelp"
        />
        <small id="emailHelp" class="form-text text-muted"
          >Show erros here</small
        >
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input
          type="password"
          class="form-control"
          id="exampleInputPassword1"
        />
      </div>
      <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1" />
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <br />
    <p>Dont have account ? <nuxt-link to="/register">Register</nuxt-link></p>
  </div>
</template>

<script>
export default {};
</script>

<style></style>
