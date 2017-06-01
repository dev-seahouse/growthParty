<template>
<nav>
  <div class="title-bar drop-shadow" data-responsive-toggle="top-menu"  data-hide-for="medium" >
    <button class="menu-icon" type="button" data-toggle="top-menu"></button>
    <img src="images/logo.jpe" alt="" class="logo"/>
    <h3 class="title-bar-title l-logo-text">Growth Party</h3>
    <div data-magellan>
      <a class="register button" href="#registerForm">Join Our Beta</a>
    </div>
  </div>

  <div class="top-bar drop-shadow" id="top-menu">

    <div class="top-bar-left">
       <ul class="vertical medium-horizontal menu align-right" data-dropdown-menu>
          <li class="menu-text show-for-medium flex-align-left"><img src="images/logo.jpe" alt="company logo" class="logo">Growth Party</li>
      </ul>
    </div>

    <div data-magellan>
      <a class="register button show-for-medium" href="#registerForm">Join Our Beta</a>
    </div>

  </div>
</nav>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        methods: {
        }

    }
</script>
