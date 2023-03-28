<!DOCTYPE html>
<html>
<head>
	<title>Who wants to be a millionaire!</title>
	<link href="style.css" rel="stylesheet">
</head>
	<body>
	<?php
	$filecontents = file_get_contents('file.txt');
	?>
	<div class= "login">
		<h3>Leaderboard</h3>
		<pre><h3><?=$filecontents?></h3></pre>
	</div>
	</body>
</html>