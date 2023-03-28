<?php

session_start();
session_destroy();


?>

<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="win.css">
  <title>You Just Won!</title>
</head>

<body>

  <div class="image">
    <IMG SRC="money.gif" height="100%" width="100%">

  </div>
  <audio autoplau="">
    <source src="x.mp3" type="audio/mp3">
    </source>
  </audio>
  <div class="waviy">
    <span style="--i:1">You </span>
    <span style="--i:2">Just </span>
    <span style="--i:3">WON</span>
    <span style="--i:4">!</span>
  </div>
  <div class="waviy">
    </br></br></br>
    <span style="--i:1"><a href='login.php'>play again</a></span>
  </div>

</body>