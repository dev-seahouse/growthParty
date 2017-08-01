<template>
</template>
<script>
  export default {
    props: ['program'],
    data() {
      return {
        conversations: [],
        message:'',
        program_id: this.program.id
      }
    },
    mounted(){

    },
    methods: {
      store() {
        axios.post('/conversations', {message: this.message, program_id: this.program_id})
          .then((response) => {
            this.message = '';
            this.conversations.push(response.data);
          });
      },

      listenForNewMessage() {
        Echo.private('programs.' + this.program.id)
          .listen('NewMessage', (e) => {
            // console.log(e);
            this.conversations.push(e);
          });
      }


    }
  }
</script>