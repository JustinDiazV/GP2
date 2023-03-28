<?php
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="win.css">
<title>You Just Won!</title>
</head>
<body>

<div class="image">
 <IMG SRC="money.gif" height = "100%" width = "100%">

</div>
<audio autoplau="">
  <source src="x.mp3" type="audio/mp3"></source>
</audio>
 <div class="waviy">
   <span style="--i:1">Better </span>
   <span style="--i:2">Luck </span>
   <span style="--i:3">Next</span>
   <span style="--i:4">Time </span>
   <span style="--i:5"><?php print $_POST['name'] ?> </span>
   <span style="--i:6">!</span>
   </div>
 <div class="waviy">
 </br></br></br>
   <span style="--i:1"><a href='login.php'>play again</a></span>
   </div>
   
</body>