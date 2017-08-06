<template>
  <div class="row column">
    <div class="off-canvas position-right" id="offCanvas" data-off-canvas>
      <header class="header">
        <h1 class="title">Materials</h1>
      </header>
      <!-- Menu -->

      <ul class="vertical menu">
        <li><a href="#" :class=" {'is-active' : isActive('pitch-deck')} " @click="switchView('pitch-deck')">Pitch Deck</a></li>
        <li><a href="#" :class=" {'is-active' : isActive('portfolio')} " @click="switchView('portfolio')">Portfolio</a></li>
        <li><a href="#" :class=" {'is-active' : isActive('brochures')} " @click="switchView('brochures')">Brochures</a></li>
      </ul>

      <!-- Close button -->
      <button class="close-button" aria-label="Close menu" type="button" data-close>
        <span aria-hidden="true">&times;</span>
      </button>

    </div>

    <div class="off-canvas-content" data-off-canvas-content>
      <!-- set loader based on doc type passed in, if ppt use microsoft laoder, if pdf use google loader-->
    </div>
  </div>

</template>
<script>
  import OfficeLoader from './DocLoaders/OfficeLoader'
  const components = {
    'office-loader': OfficeLoader
  }

  export default {
    components,
    data () {
      return {
        currentView: '',
        currentComponent: ''
      }
    },
    methods: {
      switchView (nameOfView) {
        this.currentView = nameOfView
      },
      isActive(selectedViewName) {
        return  selectedViewName == this.currentView
      }
    },
    props: [
      'documents',
      'curr_page'
    ]
  }
</script>
