<?php 
 session_start();
 if( !isset($_SESSION["totalcorrect"])) {
 echo"Variable has been set. <br>";
 $_SESSION["totalcorrect"] = 0;
 

 }

 if( !isset($_SESSION["correctincorrect"])) {
 echo"Variable has been set. <br>";
 $_SESSION["correctincorrect"] = "";

}
$totalCorrect = $_SESSION["totalcorrect"];
$correctincorrect = $_SESSION["correctincorrect"];


?> 
<!DOCTYPE html>

<html>
 
<head>
	<meta charset="UTF-8" />
	
	<title>Results And Answers</title>
	
    <link href="intro.css" type="text/css" rel="stylesheet" />
</head>
 
<body>
 
	<div id="wrapper">
 


		
        <?php                
        
            
            $a1 = $_POST['q1ans'];
            $a2 = $_POST['q2ans'];
            $a3 = $_POST['q3ans'];
            $a4 = $_POST['q4ans'];
            $a5 = $_POST['q5ans'];
            $a6 = $_POST['q6ans'];
            $a7 = $_POST['q7ans'];
            $a8 = $_POST['q8ans'];
            $a9 = $_POST['q9ans'];
            $a10 = $_POST['q10ans'];
            $a11 = $_POST['q11ans'];
            $a12 = $_POST['q12ans'];
            $a13 = $_POST['q13ans'];
            $a14 = $_POST['q14ans'];
            $a15 = $_POST['q15ans'];
        
            
            if ($a1 == "C") { $totalCorrect++; $correctincorrect = "Correct"; }
            else  { $correctincorrect = "Incorrect"; }
            if ($a2 == "C") { $totalCorrect++; $correctincorrect = "Correct"; }
            else { $correctincorrect = "Incorrect"; }
            if ($a3 == "B") { $totalCorrect++; $correctincorrect = "Correct"; }
            else { $correctincorrect = "Incorrect"; }
            if ($a4 == "D") { $totalCorrect++; $correctincorrect = "Correct"; }
            else { $correctincorrect = "Incorrect"; }
            if ($a5 == "D") { $totalCorrect++;$correctincorrect = "Correct";  }
            else { $correctincorrect = "Incorrect"; }
            if ($a6 == "A") { $totalCorrect++;$correctincorrect = "Correct";  }
            else { $correctincorrect = "Incorrect"; }
            if ($a7 == "C") { $totalCorrect++;$correctincorrect = "Correct";  }
            else { $correctincorrect = "Incorrect"; }
            if ($a8 == "A") { $totalCorrect++; $correctincorrect = "Correct"; }
            else { $correctincorrect = "Incorrect"; }
            if ($a9 == "C") { $totalCorrect++; $correctincorrect = "Correct"; }
            else { $correctincorrect = "Incorrect"; }
            if ($a10 == "C") { $totalCorrect++; $correctincorrect = "Correct"; }
            else { $correctincorrect = "Incorrect"; }
            if ($a11 == "A") { $totalCorrect++;$correctincorrect = "Correct";  }
            else { $correctincorrect = "Incorrect"; }
            if ($a12 == "C") { $totalCorrect++; $correctincorrect = "Correct"; }
            else { $correctincorrect = "Incorrect"; }
            if ($a13 == "C") { $totalCorrect++;$correctincorrect = "Correct";  }
            else { $correctincorrect = "Incorrect"; }
            if ($a14 == "B") { $totalCorrect++;$correctincorrect = "Correct";  }
            else { $correctincorrect = "Incorrect"; }
            if ($a15 == "C") { $totalCorrect++; $correctincorrect = "Correct"; }
            else { $correctincorrect = "Incorrect"; }
     

            
            
            echo "<div id='results'>$totalCorrect / 15 correct</div>";
            $_SESSION["totalcorrect"] = $totalCorrect;
            $_SESSION["correctincorrect"] = $correctincorrect;
            
        ?>

<h1> Your results is <?=$correctincorrect?></h1> 
<h1>   <a href="intro.php"><h1> Go back to questions </h1> </a>
        	
	
	</div>
 
</body>
 
</html>