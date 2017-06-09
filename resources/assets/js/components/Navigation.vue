<template>
<nav>
  <div class="title-bar drop-shadow" data-responsive-toggle="top-menu"  data-hide-for="medium" >
    <button class="menu-icon" type="button" data-toggle="top-menu"></button>
    <img src="/images/logo.jpe" alt="" class="l-logo-img"/>
    <h4 class="title-bar-title l-logo-text show-for-medium">Growth Party</h4>
    <div data-magellan>
      <a class="register button m-b-0" href="#registerForm">Join Our Beta</a>
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
       </ul>
      </div>

      <div data-magellan>
        <a class="register button show-for-medium m-b-0" data-open="registerModal">Join Our Beta</a>
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
