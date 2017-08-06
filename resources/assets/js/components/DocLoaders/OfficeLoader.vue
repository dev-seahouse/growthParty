<template>
  <iframe
      :src="'//view.officeapps.live.com/op/embed.aspx?src=' +  uri"
      width='100%' height='600px' frameborder='0'>This is an embedded <a target='_blank' href='https://office.com'>Microsoft Office</a>
    presentation, powered by <a target='_blank' href='https://office.com/webapps'>Office Online</a>.
  </iframe>
</template>
<script>
export default {
  props: [
    'uri'
  ]
}
</script>