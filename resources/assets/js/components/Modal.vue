<template>
  <div class="reveal"
       :class="size"
       :id="cid"
       data-reveal=""
       :data-overlay="overlay"
       :data-animation-in="animationin"
       :data-animation-out="animationout"
       :aria-labelledby="labelledby"
  >
    <div class="row column">
      <slot name="title"></slot>
    </div>
    <slot></slot>
    <button class="close-button" data-close aria-label="Close Modal" type="button" v-if="closable">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>

</template>

<script>
  export default {
    props: ['labelledby', 'animation', 'closable', 'label', 'size', 'id', 'overlay'],
    computed: {
      cid: function () {
        if (this.id) {
          return this.id
        }
        return 'modal-' + this._uid
      },
      animationin: function () {
        if (this.animation) {
          return this.animation + '-in'
        }
        return ''
      },
      animationout: function () {
        if (this.animation) {
          return this.animation + '-out'
        }
        return ''
      }
    }
  }
</script>
