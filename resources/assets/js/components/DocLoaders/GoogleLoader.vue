<template>
  <div class="iframe-holder">
    <iframe :src="'//docs.google.com/viewer?url=' + uri + '&embedded=true&hl=en'" title="Embedded Document" style="width:100%; height:550px; border: none;"></iframe>
    <a :href="uri" class="download-button" download><i class="fa fa-cloud-download" aria-hidden="true"></i><span class="link-text">Download</span></a>
  </div>
</template>
<script>
  export default {
    props: [
      'uri'
    ]
  }
</script>
