<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>ChatDemo</title>
	<link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">

	<style type="text/css">
		body{
			color: #6c757d;
			background-color: #343a40;
		}
	
	</style>
</head>
<body>
	
	<div id="app">
		<h1>ChatRoom</h1>
		
		<chat-log :messages='messages'></chat-log>
		<chat-composer v-on:messagesent='addMessage'></chat-composer>
	</div>

	<script src="{{ asset('js/app.js') }}"></script>

</body>
</html>
