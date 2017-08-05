<template>
  <form action="/login" method="post" @submit.prevent="onSubmit">
    <h3 slot="title">Login</h3>
    <input type="hidden" name="_token" :value="csrf_token">

    <div class="row">
      <div class="small-12 columns">
        <label>
          Email or phone
          <input
              type="text"
              v-model="detail.loginId"
              placeholder="Enter email or mobile">
        </label>
        <span class="form-error is-visible">{{ error.loginId }}</span>
      </div>
    </div>

    <div class="row">
      <div class="small-12 columns">
        <label>
          Password
          <input
              type="password"
              v-model="detail.password"
              placeholder="Enter password">
        </label>
        <span class="form-error is-visible">{{ error.password }}</span>
      </div>
    </div>

    <div class="row column">
      <button type="submit" class="button">Login</button>
    </div>

  </form>
</template>

<script>
  /* eslint-disable no-trailing-spaces */

  const getError = (error, type) => {
    if (error[type]) { return (error[type] || error[type].pop()) }
    return ""
  }
  const resolveError = (error, type) => {
// eslint-disable-next-line curly
    if (error[type])
      return (error[type] && getError(error, type))
    return ""
  }
  const parseError = (body) => {
    const error = body.response.data
    const output = {
      loginId: resolveError(error, 'mobile') || resolveError(error, 'email'),
      password: getError(error, 'password') || '',
    }
    // Normalise loginId
    output.loginId = (Array.isArray(output.loginId)) ? output.loginId.toString() : output.loginId
    // Normalize password
    output.password = (Array.isArray(output.password)) ? output.password.toString() : output.password

    return output
  }

  export default {
    data () {
      return {
        detail: {
          loginId: '',
          password: '',
        },
        error: {
          loginId: '',
          password: '',
        }
      }
    },
    methods: {
      onSubmit () {
        axios.post('/login', this.detail)
          .then(response => {
            window.location.replace('/dashboard')
          })
          .catch((error) => {
            this.error = parseError(error)
          })
      }
    }
  }
</script>
