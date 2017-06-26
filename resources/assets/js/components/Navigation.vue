<template>
  <nav class="navbar fixed">

    <div class="title-bar drop-shadow" data-responsive-toggle="res-toggle__top-menu" data-hide-for="medium">
      <button class="menu-icon" type="button" data-toggle="res-toggle__top-menu"></button>
      <a class="flex-pull-left" href="/"><img src="/images/logo.jpe" alt="" class="l-logo-img"></a>
      <h4 class="title-bar-title l-logo-text show-for-medium">Growth Party</h4>
      <a class="register button m-b-0" data-open="modal__register">Join Our Beta</a>
    </div>

    <div ref="top-bar" class="top-bar drop-shadow p-v-0" id="res-toggle__top-menu">
      <div class="top-bar-left">
        <ul class="vertical medium-horizontal menu align-right" data-dropdown-menu>
          <li class="menu-text no-padding show-for-medium flex-pull-left">
            <a href="/" class="logo"><img src="/images/logo.jpe" alt="company logo"
                                          class="l-logo-img"><span class="logo-text">Growth Party</span>
            </a>
          </li>
          <li class="menu-text m-r-0 p-r-0">
            <a href="/blog">Blog</a>
          </li>
          <li class="menu-text">
            <a data-open="modal__login">Login</a>
          </li>
          <li class="menu-text">
            <a data-open="modal__register"
               class="register button show-for-medium m-b-0">Join Our Beta</a>
          </li>
        </ul>
      </div>
    </div>

    <modal class="small" id="modal__login" closable=true>
      <login></login>
    </modal>

    <modal class="small" id="modal__register" closable=true>
      <registration></registration>
    </modal>

  </nav>
</template>

<script>
  import Registration from './Account/Registration';
  import Login from './Account/Login';

  export default {
    components: {
      registration: Registration,
      login: Login,
    },
    data() {
      return {};
    },
    mounted() {
      const headroom = new Headroom(this.$el, {
        offset: 205,
        tolerance: 5,
        classes: {
          initial: 'animated',
          pinned: 'slideDown',
          unpinned: 'slideUp'
        }
      });
      headroom.init();
    },
  };
</script>
