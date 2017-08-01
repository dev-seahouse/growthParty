<template>
</template>
<script>
  export default {
    props: ['program_id'],
    data() {
      return {
        conversations: [],
        message:'',
        programId: this.program_id
      };
    },
    mounted() {
      this.listenForNewMessage();
    },
    methods: {
      store() {
        axios.post('/conversations', {message: this.message, program_id: this.programId})
          .then((response) => {
            this.message = '';
            this.conversations.push(response.data);
          });
      },

      listenForNewMessage() {
        Echo.private('programs.' + this.programId)
          .listen('NewMessage', (e) => {
            // console.log(e);
            this.conversations.push(e);
          });
      }
    }
  }
</script>