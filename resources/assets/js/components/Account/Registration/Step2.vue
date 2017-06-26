<template>
  <div>
    <div class="step-tab-panel">
      <p>Please enter the OTP we have sent to your mobile number below.</p>
      <div class="l-padded row small-6 columns align-center">
        <input type="text"
          name="otp"
          placeholder="Enter OTP"
          v-model="localDetail.otp"
          required>
      </div>
    </div>
    <div class="step-footer">
      <button class="button" type="button" v-on:click="prev">Previous</button>
      <button class="button" type="button" v-on:click="next">Done</button>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      localDetail: {
        otp: '',
      },
      numTry: 0,
    };
  },
  props: ['detail'],
  methods: {
    prev() { this.$emit('prev'); },
    next() { this.$emit('next', this.localDetail); },
    sendOtp() {
      this.numTry++;
      console.log(`Tries ${this.numTry}. Sending OTP code to ${this.detail.mobile}.`);
      axios.post('/otp/send', { mobile: this.detail.mobile })
        .then(console.log)
        .catch(console.log);
    }
  },
  mounted() {
    this.sendOtp();
  }
};
</script>
