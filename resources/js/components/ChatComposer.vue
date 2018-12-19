<template>
	<div class="chat-composer">
		<input type="text" placeholder="Start type your message...." v-model="messageText" v-on:keyup.enter="sendMessage">
		<button class="btn btn_primary" @click="sendMessage">Send</button>
	</div>
</template>

<script>
	export default{
		data(){
			return{
				messageText:''
			}
		},
		methods:{
			sendMessage(){
				this.$emit('messagesent',{
					message:this.messageText,
					user:"Tommy!"
				});
				this.messageText='';
			}
		}
	}
</script>
<style type="text/css">
	
	.chat-composer{
		display: flex;
	}
	.chat-composer input{
		flex: 1 auto;
	}
</style>
