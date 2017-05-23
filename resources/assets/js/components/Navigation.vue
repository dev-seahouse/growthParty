<template>
<nav>
  <div class="title-bar" data-responsive-toggle="top-menu"  data-hide-for="medium">
    <button class="menu-icon" type="button" data-toggle="top-menu"></button>
    <h3 class="title-bar-title">Growth Party</h3>
    <button class="button">Start Earning</button>
  </div>

  <div class="top-bar" id="top-menu">
    <div class="top-bar-left">
       <ul class="vertical medium-horizontal menu align-right" data-dropdown-menu>
          <li class="menu-text show-for-medium flex-align-left">Growth Party</li>
          <li><a href="#login">Login</a></li>
          <li><a href="#partner">I want to grow my business</a></li>
      </ul>
    </div>
  </div>
</nav>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
