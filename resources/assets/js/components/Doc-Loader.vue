<template>
  <div class="row column">
    <div class="off-canvas position-right" id="offCanvas" data-off-canvas>
      <header class="header">
        <h1 class="title">Materials</h1>
      </header>
      <!-- Menu -->
      <ul class="vertical menu">
        <li><a href="#">Pitch Deck</a></li>
        <li><a href="#">Portfolio</a></li>
        <li><a href="#">Brochures</a></li>
      </ul>

      <!-- Close button -->
      <button class="close-button" aria-label="Close menu" type="button" data-close>
        <span aria-hidden="true">&times;</span>
      </button>

    </div>

    <div class="off-canvas-content" data-off-canvas-content>
      <!-- set loader based on doc type passed in, if ppt use microsoft laoder, if pdf use google loader-->

      <iframe
          src='https://view.officeapps.live.com/op/embed.aspx?src=http%3A%2F%2Fdev%2Eawsm%2Ein%3A80%2Finnovations%2Fwp%2Dcontent%2Fuploads%2F2014%2F11%2Fppt%2Dsample%2Epptx&wdAr=1.3333333333333333&Embed=1'
          width='100%' height='600px' frameborder='0'>This is an embedded <a target='_blank' href='https://office.com'>Microsoft Office</a>
        presentation, powered by <a target='_blank' href='https://office.com/webapps'>Office Online</a>.
      </iframe>
    </div>
  </div>

</template>
<script>
  export default {
    props: [
      'documents',
    ]
  }
</script>
