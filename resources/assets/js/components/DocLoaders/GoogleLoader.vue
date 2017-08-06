<template>
  <iframe :src="'//docs.google.com/viewer?url=' + uri + '&embedded=true'" title="Embedded Document" style="width:100%; height:600px; border: none;"></iframe>
</template>
<script>
  export default {
    props: [
      'uri'
    ]
  }
</script>