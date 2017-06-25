<template lang="html">
	<div class="chat-message">
		<p>{{ message.message }}</p>
		<small>{{ message.user }}</small>
		<hr>
	</div>
</template>

<script>
export default {
	props: ['message']
}
</script>

<style lang="scss">
	.chat-message {
		&:hover {
			background-color: yellow;
		}
	}
</style>