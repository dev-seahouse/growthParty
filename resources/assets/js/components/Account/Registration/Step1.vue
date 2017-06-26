<template>
  <div class="step-tab-panel" id="step1">
    <p>Please enter your mobile number to get started!</p>
    <input type="hidden" name="_token" :value="csrf_token">
    <div class="row">
      <div class="small-12 columns">
        <label>Email<input type="email" name="email" placeholder="Enter email" required></label>
      </div>
    </div>
    <div class="row">
      <div class="small-12 columns">
        <label>Phone No.<input type="text" name="mobile" id="js-reg-mobile" placeholder="Enter phone no."
                                required></label>
      </div>
    </div>
    <div class="row">
      <div class="small-12 columns">
        <label>Password<input type="password" name="password" placeholder="Enter password" required></label>
      </div>
    </div>
  </div>
</template>
