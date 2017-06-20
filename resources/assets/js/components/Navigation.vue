<template>
  <nav class="navbar fixed">
    <div class="title-bar drop-shadow" data-responsive-toggle="top-menu" data-hide-for="medium">
      <button class="menu-icon" type="button" data-toggle="top-menu"></button>
      <a class="flex-pull-left" href="/"><img src="/images/logo.jpe" alt="" class="l-logo-img"/></a>
      <h4 class="title-bar-title l-logo-text show-for-medium">Growth Party</h4>
      <div data-magellan>
        <a class="register button m-b-0" href="/blog">Visit Blog</a>
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
        </ul>
      </div>
      
      <div data-magellan>
        <a class="register button show-for-medium m-b-0" data-open="registerModal" href="/blog">Visit Blog</a>
      </div>
    
    </div>
  </nav>
</template>

<script>
  export default {
    mounted() {
      var header = document.querySelector("nav.navbar");
      var headroom = new Headroom(header,{
          "offset": 205,
          "tolerance": 5,
          "classes": {
            "initial": "animated",
            "pinned": "slideDown",
            "unpinned": "slideUp"
          }
        }
      );
      headroom.init()
    },
    methods: {}
    
  }
</script>
