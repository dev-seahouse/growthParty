<template>
  <form action="/login" method="post" @submit.prevent="onSubmit">
    <h3 slot="title">Login</h3>
    <input type="hidden" name="_token" :value="csrf_token">
    <div class="row">
      <div class="small-12 columns">
        <label>Email or phone<input type="text" v-model="loginId" name="loginId" placeholder="Enter email or mobile"></label>
        <span class="form-error is-visible">{{ idError }}</span>
      </div>
    </div>
    <div class="row">
      <div class="small-12 columns">
        <label>Password<input type="password" name="password" v-model="password" placeholder="Enter password"></label>
        <span class="form-error is-visible">{{ passError }}</span>
      </div>
    </div>
    <div class="row column">
      <button type="submit" class="button">Login</button>
    </div>
  </form>
</template>

<script>
export default {
  data() {
    return {
      loginId: '',
      password: '',
      passError: '',
      idError: '',
    };
  },
  methods: {
    onSubmit() {
      axios.post('/login', {
        loginId: this.loginId,
        password: this.password
      }).then(response => {
        window.location.replace('/dashboard');
      }).catch(error => {
        console.log(error.response.data);
        error = error.response.data;
        this.idError = (error.mobile && (error.mobile || error.mobile.pop())) ||
                        (error.email && (error.email || error.email.pop()));
        if (Array.isArray(this.idError)) {
          this.idError = this.idError.toString();
        }
        this.passError = (error.password && error.password.pop()) || '';
      });
    }
  }
}
</script>
