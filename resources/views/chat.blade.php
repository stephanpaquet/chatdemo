<html>
<head>
	<title>Chat room</title>
	<link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
<body>
	<div class="container">
		<h1>Chatroom</h1>

		<div id="app">
			<chat-log :messages="messages"></chat-log>
			<chat-composer v-on:messagesent="addMessage"></chat-composer>
		</div>
	</div>

	<script src="/js/app.js"></script>
</body>
</html>