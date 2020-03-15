<style scoped>
    .panel-block {
        flex-direction: row;
        width: 100%;
        border: none;
    }

    .input{
        border-radius: 0;
        width: 100%;

    }
    .auto-width{
        width:auto;
    }
</style>

<template>
    <div class="panel-block field">
        <div class="control">
            <input type="text" name="" id="" class="input" 
            @keyup.enter="sendChat" v-model="chat">
        </div>
        <div class="control auto-width">
            <input type="button" name="" id="" class="button" value="send" 
            @click="sendChat">
        </div>
    </div>
</template>

<script>
    export default {
        props: ['chats', 'friendid', 'userid'],
        data(){
            return {
                chat: ''
            }
        },

        methods: {
            sendChat: function(e){
               if ( this.chat != '') 
               {
                   var data = {
                       chat: this.chat,
                       friend_id: this.friendid,
                       user_id: this.userid,
                   }
                   this.chat = '';

                    axios.post('/chat/send-chat/', data).then( ( response ) => {
                        this.chats.push(data)
                    })
               }

            }
        },
    }
</script>
