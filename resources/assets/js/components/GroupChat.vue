<template>
    <div class="callout">
      <h5>This is a group chat</h5>
      <ul class="chat">
        <li v-for="conversation in conversations">
          <div class="chat-body">
            {{ conversation.message }}
          </div>
        </li>
      </ul>

      <div class="footer">
        <input id="btn-input" type="text" placeholder="type your message here..." v-model="message" @keyup.enter="store()" autofocus>
        <button id="btn-chat" class="button" @click.prevent="store">Send</button>
      </div>

    </div>
</template>
<script>
  export default {
    props: ['program_id'],
    data() {
      return {
        conversations: [],
        message:'',
      };
    },
    mounted() {
      this.listenForNewMessage();
    },
    methods: {
      store() {
        console.log(this.program_id);
        axios.post('/conversations', {message: this.message, program_id: this.program_id})
          .then((response) => {
            this.message = '';
            this.conversations.push(response.data);
          });
      },

      listenForNewMessage() {
        Echo.private('programs.' + this.program_id)
          .listen('NewMessage', (e) => {
            // console.log(e);
            this.conversations.push(e);
          });
      }
    }
  }
</script>