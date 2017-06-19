<template>
  <nav>
    <div class="title-bar drop-shadow" data-responsive-toggle="top-menu" data-hide-for="medium">
      <button class="menu-icon" type="button" data-toggle="top-menu"></button>
      <img src="/images/logo.jpe" alt="" class="l-logo-img"/>
      <h4 class="title-bar-title l-logo-text show-for-medium">Growth Party</h4>
      <div data-magellan>
        <a class="register button m-b-0" data-open="registerModal">Join Our Beta</a>
      </div>
    </div>

    <div class="top-bar drop-shadow p-v-0" id="top-menu">

      <div class="top-bar-left">
        <ul class="vertical medium-horizontal menu align-right" data-dropdown-menu>
          <li class="menu-text show-for-medium flex-pull-left">
            <a href="/" class="logo"><img src="/images/logo.jpe" alt="company logo"
                                          class="l-logo-img"><span class="logo-text">Growth Party</span>
            </a>
          </li>
          <li class="menu-text m-r-0 p-r-0"><a href="/blog">Blog</a></li>
          <li class="menu-text"><a data-open="loginModal">Login</a></li>
        </ul>
      </div>

      <div data-magellan>
        <a class="register button show-for-medium m-b-0" data-open="registerModal">Join Our Beta</a>
      </div>

    </div>

    <modal class="small" id="loginModal" closable=true>
      <h3 slot="title">Login</h3>
      <form action="/login" method="post" @submit.prevent="onSubmit">
        <input type="hidden" name="_token" :value="csrf_token">
        <div class="row">
          <div class="small-12 columns">
            <label>Email or phone<input type="text" v-model="loginId" name="loginId"
                                        placeholder="Enter email or mobile"></label>
            <span class="form-error is-visible">{{ idError }}</span>
          </div>
        </div>
        <div class="row">
          <div class="small-12 columns">
            <label>Password<input type="password" name="password" v-model="password"
                                  placeholder="Enter password"></label>
            <span class="form-error is-visible">{{ passError }}</span>
          </div>
        </div>
        </div>
        <div class="row column">
          <button type="submit" class="button">Login</button>
        </div>
      </form>
    </modal>

    <modal class="small" id="registerModal" closable=true>
      <form action="/register" method="post" id="registerForm">
        <h3 slot="title">Register</h3>
        <p>Please enter your mobile number to get started!</p>
        <!-- Begin Step -->
        <div class="step-app">
          <!-- step nav -->
          <ul class="step-steps">
            <li><a href="#step1">Step 1 - Enter</a></li>
            <li><a href="#step2">Step 2 - Verify</a></li>
          </ul>
          <!-- end step nav -->
          <!-- step content -->
          <div class="step-content">
            <!-- step 1 -->
            <div class="step-tab-panel" id="step1">
              <input type="hidden" name="_token" :value="csrf_token">
              <div class="row">
                <div class="small-12 columns">
                  <label>Email<input type="email" name="email" placeholder="Enter email"></label>
                </div>
              </div>
              <div class="row">
                <div class="small-12 columns">
                  <label>Phone No.<input type="text" name="mobile" placeholder="Enter phone no."></label>
                </div>
              </div>
              <div class="row">
                <div class="small-12 columns">
                  <label>Password<input type="password" name="password" placeholder="Enter password"></label>
                </div>
              </div>

            </div>
            <!-- end step 1 -->
            <!-- step 2 -->
            <div class="step-tab-panel" id="step2">
            </div>
            <!-- end step 2 -->

          </div>
          <!-- end step content -->
          <div class="row">
            <div class="step-footer">
              <button data-direction="prev" class="button">Previous</button>
              <button data-direction="next" class="button">Confirm</button>
              <button data-direction="finish" type="submit" class="button">Register</button>
            </div>
          </div>
        </div>
        <!-- end step -->

      </form>

    </modal>

  </nav>

</template>

<script>
  export default {
    data() {
      return {
        loginId: "",
        password: "",
        passError: "",
        idError: ""
      }
    },
    mounted: function () {
      $('.step-app').steps({
        onFinish: function () {
          $('#registerForm').submit()
        },
        onChange: function (currentIndex, newIndex, stepDirection) {
          if (currentIndex === 0 && stepDirection == 'forward') {

          }
          return true
        }
      })
    },
    methods: {
      onSubmit () {
        axios.post("/login", {
          loginId: this.loginId,
          password: this.password
        }).then(response => {
          window.location.replace('/dashboard')
        }).catch(error => {
          console.log(error.response.data)
          error = error.response.data
          this.idError = error.mobile && (error.mobile || error.mobile.pop()) ||
            error.email && (error.email || error.email.pop())
          if (Array.isArray(this.idError)) {
            this.idError = this.idError.toString()
          }
          this.passError = error.password && error.password.pop() || ""
        })
      }
    }
  }
</script>
