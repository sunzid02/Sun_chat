<template>
    <div class="row">
        <div class="col-md-12">
            <h3>Example heading <span class="label label-default">New</span></h3>

            <h1> all chat message component </h1>

            <!-- chat message -->
            <ul class="list-group">
                
                <li class="list-group-item" v-for="chat in chats">
                    {{ chat.chat }}
                </li>
            </ul>     

            
        </div>
    </div>
</template>

<script>
    export default {
        props: ['chats'],

        mounted() {
            console.log('allcmc Component mounted.')
        }
    }
</script>
