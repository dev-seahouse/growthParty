<template>
  <div class="chat restrained bottom right">
    <div class="header" @click="toggleChat">
      <span class="title">Group Chat</span>
      <transition name="fade">
        <span v-show="typing" class="subtitle"><i class="fa fa-bullhorn icon" aria-hidden="true"></i>Someone is typing ...</span>
      </transition>
      <a href="#" class="minimize"></a>
    </div>
    <div class="body">
      <ul class="thread no-bullet">

        <li class="message" v-for="conversation in conversations">

          <div class="info">
            <span>
              {{ conversation.user.name }}

            </span>

            <span class="date">
              {{ conversation.updated_at }}
            </span>

          </div>

          <div class="content">
            {{ conversation.message }}
          </div>

        </li>
      </ul>
      <div class="whostyping" v-show="typing">
        @{{ this.typing_user }} is typing
      </div>
      <div class="input-group controls">
        <input id="btn-input" class="input" type="text" placeholder="type your message here..." v-model="message"
               @keyup.enter="store()" @keydown="isTyping" @keyup="notTyping" autofocus>
        <button id="input-group-button btn-chat" class="button" @click.prevent="store">Send</button>
      </div>
    </div>

  </div>
</template>
<script>
  export default {
    props: [
      'program_id',
      'curr_user',
    ],
    data () {
      return {
        conversations: [],
        message: '',
        typing: false,
        typing_user: ''
      }
    },
    created () {
      let _this = this
      Echo.private('programs.' + this.program_id)
        .listenForWhisper('typing', (e) => {
          this.typing_user = e.user
          this.typing = e.typing

          setTimeout(function () {
            _this.typing = false
          }, 1500)
        })
    },
    mounted () {
      this.fetchChatHistory()
      this.listenForNewMessage()
    },

    methods: {
      toggleChat () {
        $('.body').slideToggle(300, 'swing')
      },
      isTyping () {
        let _this = this
        let channel = Echo.private('programs.' + this.program_id)
        setTimeout(function () {
          channel.whisper('typing', {
            user: _this.curr_user.name,
            typing: true
          })
        }, 300)
      },
      notTyping () {
        this.typing = false
      },
      fetchChatHistory () {
        axios.get('/conversations/' + this.program_id)
          .then((response) => {
            this.conversations = response.data
          })
      },
      store () {
        axios.post('/conversations', {message: this.message, program_id: this.program_id})
          .then((response) => {
            this.message = ''
            this.conversations.push(response.data)
          })
      },

      listenForNewMessage () {
        Echo.private('programs.' + this.program_id)
          .listen('NewMessage', (e) => {
            // console.log(e);
            this.conversations.push(e)
          })
      }
    }
  }
</script>