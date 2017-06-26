<template>
  <div>
    <div class="step-tab-panel">
      <p>Please enter your mobile number to get started!</p>
      <input type="hidden" name="_token" :value="csrf_token">
      <div class="row">
        <div class="small-12 columns">
          <label>
            Email
            <input type="email"
              name="email"
              placeholder="Enter email"
              v-model="localDetail.email"
              required>
          </label>
        </div>
      </div>
      <div class="row">
        <div class="small-12 columns">
          <label>
            Phone No.
            <input type='tel'
              pattern='[+]?[\d ]*'
              name="mobile" 
              placeholder="Enter phone no."
              v-model="localDetail.mobile"
              required>
          </label>
        </div>
      </div>
      <div class="row">
        <div class="small-12 columns">
          <label>
            Password
            <input type="password"
              minlength="6"
              name="password"
              placeholder="Enter password"
              v-model="localDetail.password"
              required>
          </label>
        </div>
      </div>
    </div>
    <div class="step-footer">
      <button class="button" type="button" v-on:click="next">Register</button>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      localDetail: {
        email: this.detail.email || '',
        mobile: this.detail.mobile || '',
        password: this.detail.password || '',
      },
    };
  },
  props: ['detail'],
  methods: {
    next(event) { this.$emit('next', this.localDetail); },
  },
};
</script>
