<template>
  <nav>
    <div class="title-bar drop-shadow" data-responsive-toggle="top-menu" data-hide-for="medium">
      <button class="menu-icon" type="button" data-toggle="top-menu"></button>
      <img src="images/logo.jpe" alt="" class="logo"/>
      <h4 class="title-bar-title l-logo-text show-for-medium">Growth Party</h4>
      <div data-magellan>
        <a class="register button m-b-0" data-open="registerModal">>Join Our Beta</a>
      </div>
    </div>

    <div class="top-bar drop-shadow" id="top-menu">

      <div class="top-bar-left">
        <ul class="vertical medium-horizontal menu align-right" data-dropdown-menu>
          <li class="menu-text show-for-medium flex-align-left"><img src="images/logo.jpe" alt="company logo"
           class="logo">Growth Party
         </li>
         <li class="menu-text"><a data-open="loginModal">Login</a></li>
       </ul>
     </div>

     <div data-magellan>
     <a class="register button show-for-medium m-b-0" data-open="registerModal">Join Our Beta</a>
    </div>

  </div>

  <modal class="small" id="loginModal" closable=true>

    <h3 slot="title">Login</h3>
    <form action="/login" method="post" accept-charset="utf-8">
      <input type="hidden" name="_token" :value="csrf_token">
      <div class="row">
        <div class="small-12 columns">
          <label>Email or phone<input type="text" name="loginId" placeholder="Enter email or mobile"></label>
        </div>
      </div>
      <div class="row">
        <div class="small-12 columns">
          <label>Password<input type="password" name="password" placeholder="Enter password"></label>
        </div>
      </div>
      <div class="row column">
        <button type="submit" class="button">Login</button>
      </div>
    </form>
  </modal>

  <modal class="small" id="registerModal" closable=true>

    <h3 slot="title">Register</h3>
    <form action="/register" method="post" accept-charset="utf-8">
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
      <div class="row column">
        <button type="submit" class="button">Register</button>
      </div>
    </form>
  </modal>

</nav>

</template>

<script>
  export default {
    methods: {}
  }
</script>
