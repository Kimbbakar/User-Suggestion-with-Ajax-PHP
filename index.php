<!DOCTYPE html>

<html>
<head>
	<title>PHP with AJAX</title>
	<link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/cerulean/bootstrap.min.css">
</head>
<body>
	<div class = "container">
		<h1>Search user</h1>
		<form>
			Search User: <input  id = "input" type = "text" class = "form-control">
		</form>

		<p>Suggestions: <span id = "output" style = "font-weight:bold"></span> </p>

	</div>
	<script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
	<script type="text/javascript" src= "js/suggest.js"></script>
</body>
</html>