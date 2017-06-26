<template>
  <nav class="navbar fixed">

    <div class="title-bar drop-shadow" data-responsive-toggle="top-menu" data-hide-for="medium">
      <button class="menu-icon" type="button" data-toggle="top-menu"></button>
      <a class="flex-pull-left" href="/"><img src="/images/logo.jpe" alt="" class="l-logo-img"></a>
      <h4 class="title-bar-title l-logo-text show-for-medium">Growth Party</h4>
      <a class="register button m-b-0" data-open="registerModal">Join Our Beta</a>
    </div>

    <div class="top-bar drop-shadow p-v-0" id="top-menu">
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
            <a data-open="loginModal">Login</a>
          </li>
          <li class="menu-text">
            <a data-open="registerModal"
               class="register button show-for-medium m-b-0">Join Our Beta</a>
          </li>
        </ul>
      </div>
    </div>

    <modal class="small" id="loginModal" closable=true>
      <login></login>
    </modal>

    <modal class="small" id="registerModal" closable=true>
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
      const header = this.$el;
      const headroom = new Headroom(header, {
        offset: 205,
        tolerance: 5,
        classes: {
          initial: 'animated',
          pinned: 'slideDown',
          unpinned: 'slideUp'
        }
      });

      headroom.init();

      $('.top-bar').on('sticky.zf.stuckto:top', function() {
        $(this).addClass('shrink');
        $('top-bar-left').addClass('shrink');
      }).on('sticky.zf.unstuckfrom:top', function() {
        $(this).removeClass('shrink');
      });
    },
    methods: {}
  };
</script>
