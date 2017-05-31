<template>
<nav>
  <div class="title-bar" data-responsive-toggle="top-menu"  data-hide-for="medium" >
    <button class="menu-icon" type="button" data-toggle="top-menu"></button>
    <h3 class="title-bar-title">Growth Party</h3>
    <div data-magellan>
      <a class="button" href="#registerForm">Join Our Beta</a>
    </div>
  </div>

  <div class="top-bar" id="top-menu">
    <div class="top-bar-left">
       <ul class="vertical medium-horizontal menu align-right" data-dropdown-menu>
          <li class="menu-text show-for-medium flex-align-left">Growth Party</li>
      </ul>
    </div>
    <div data-magellan>
      <a class="button show-for-medium" href="#registerForm">Join Our Beta</a>
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
