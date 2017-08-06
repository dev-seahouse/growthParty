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
      <component
          :is="currentDocLoader"
          :uri= "currentDocUri"
      ></component>
    </div>
  </div>

</template>
<script>
  import OfficeLoader from './DocLoaders/OfficeLoader'
  import GoogleLoader from './DocLoaders/GoogleLoader'
  const components = {
    'office-loader': OfficeLoader,
    'google-loader': GoogleLoader
  }
  const whichViewLoadWhichDocumentMap = {
    // basically a mapping between name of
    // view and the name field in Material table for each program
    'pitch-deck': 'Pitch Deck',
    'portfolio': 'Porfolio',
    'brochures': 'Brochure'
  }
  export default {
    components,
    data () {
      return {
        currentView: 'pitch-deck',
        currentDocLoader: 'office-loader',
        currentDocUri: ''
      }
    },
    mounted () {
      this.loadDoc()
    },
    methods: {
      switchView (nameOfView) {
        this.currentView = nameOfView
        // decide which document to load depend on viewName
        this.loadDoc()
      },
      isActive (selectedViewName) {
        return selectedViewName === this.currentView
      },
      loadDoc () {
        let nameOfdocToLoad = this.determineDocToLoad(this.currentView, whichViewLoadWhichDocumentMap)
        let docToLoad = this.findDocObj(nameOfdocToLoad, this.documents)
        this.currentDocUri = docToLoad.uri
        this.setLoader(docToLoad.type)
        console.log(this.currentView)
        console.log('The current doc url is' + this.currentDocUri)
      },
      setLoader (extension) {
        if (extension === 'ppt' || extension === 'pptx') {
          this.currentDocLoader = 'office-loader'
        } else {
          this.currentDocLoader= 'google-loader'
        }
      },
      findDocObj (docName, docs) {
        // search through materials belonging to current program and return brochure, pitch deck or portfolio
        if (!docs.length) throw new Error('No documents are found. Check that materials for this program are uploaded.')
        return docs.filter(doc => doc.name === docName).pop()
      },
      determineDocToLoad (viewName, mapping) {
        return mapping[viewName]
      }
    },
    props: [
      'documents',
    ]
  }
</script>
