<template>
  <div>
    <iframe
        :src="'//view.officeapps.live.com/op/embed.aspx?src=' +  uri"
        width='100%' height='550px' frameborder='0'>This is an embedded <a target='_blank' href='https://office.com'>Microsoft Office</a>
      presentation, powered by <a target='_blank' href='https://office.com/webapps'>Office Online</a>.
    </iframe>
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