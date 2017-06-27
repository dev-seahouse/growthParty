<template>
  <div>
    <div class="step-tab-panel">
      <p>Please enter the OTP we have sent to your mobile number below.</p>
      <div class="v-padded row small-10 columns align-center">
        <div class="input-group">
          <input type="text"
                 name="otp"
                 placeholder="Enter OTP"
                 v-model="localDetail.otp"
                 required>
          <div class="input-group-button">
            <input type="submit" class="button" value="Resend">
          </div>
        </div>

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
    next() {
      console.log("emitting next");
      this.$emit('next', this.localDetail);
      },
    // when it is last step, need to call /verifyOtp
    sendOtp() {
      this.numTry++;
      console.log(`Tries ${this.numTry}. Sending OTP code to ${this.detail.mobile}.`);
      axios.post('/otp/send', { mobile: this.detail.countryCode + this.detail.mobile })
        .then(function () {

        })
        .catch(console.log);
    }
  },
  mounted() {
    this.sendOtp();
  }
};
</script>
