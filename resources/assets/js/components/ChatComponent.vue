<style scoped>
    .panel-block{
        flex-direction: column;
        border: none;
    }

    .chat{
        width: 100%;
        padding: 20px;
        box-shadow: inset 0 0 20px 0 blue;
        margin-bottom: 20px;
        border: 1px solid grey;
        max-height: 600px;
        overflow-x: auto;
    }

    .chat .chat-right, .chat .chat-left{
        max-width: 100%;
        box-shadow: 0 0 8px 0px blue;
        padding: 8px;
        margin: 10px;
    }

    .chat-right{
        float: right;
    }

    .chat-left{
        float: left;
    }

    .no-message{
        height: 200px;
        display: flex;
        align-items: center;
    }

</style>

<template>
    <div class="panel-block">
        <!-- if messages are available -->
        <div class="chat" v-if="chats.length != 0">
            <div v-for="chat in chats" style="overflow: auto;">
                <!-- logged in user show message right side  -->
                 <div class="chat-right" v-if="chat.user_id == userid">
                     {{ chat.chat }}
                 </div>

                 <!-- message send by friend    -->
                 <div class="chat-left" v-else>
                     {{ chat.chat }}
                 </div>
            </div>
        </div>
        <div class="no-message" v-else>
            There are no messages
        </div>
    </div>
</template>

<script>
    export default {
        props: ['chats', 'friendid', 'userid'],
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
