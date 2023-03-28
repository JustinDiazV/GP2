<<<<<<< Updated upstream
<?php 
 session_start();
 if( !isset($_SESSION["totalcorrect"])) {
 echo"Variable has been set. <br>";
 $_SESSION["totalcorrect"] = 0;
 
=======
<?php
    session_start();
    if(!isset($_SESSION['questions'])){
        $_SESSION['questions'] = [];
        $_SESSION['counter'] = 0;
    }

    $_SESSION['counter']++;

    if(isset($_POST['q1ans'])){
        $_SESSION['questions'][$_SESSION['counter']] = 1;
    }
    elseif(isset($_POST['q2ans'])){
        $_SESSION['questions'][$_SESSION['counter']] = 2;
    }
    elseif(isset($_POST['q3ans'])){
        $_SESSION['questions'][$_SESSION['counter']] = 3;
    }
    elseif(isset($_POST['q4ans'])){
        $_SESSION['questions'][$_SESSION['counter']] = 4;
    }
    elseif(isset($_POST['q5ans'])){
        $_SESSION['questions'][$_SESSION['counter']] = 5;
    }
    elseif(isset($_POST['q6ans'])){
        $_SESSION['questions'][$_SESSION['counter']] = 6;
    }
    elseif(isset($_POST['q7ans'])){
        $_SESSION['questions'][$_SESSION['counter']] = 7;
    }
    elseif(isset($_POST['q8ans'])){
        $_SESSION['questions'][$_SESSION['counter']] = 8;
    }
    elseif(isset($_POST['q9ans'])){
        $_SESSION['questions'][$_SESSION['counter']] = 9;
    }
    elseif(isset($_POST['q10ans'])){
        $_SESSION['questions'][$_SESSION['counter']] = 10;
    }
    elseif(isset($_POST['q11ans'])){
        $_SESSION['questions'][$_SESSION['counter']] = 11;
    }
    elseif(isset($_POST['q12ans'])){
        $_SESSION['questions'][$_SESSION['counter']] = 12;
    }
    elseif(isset($_POST['q13ans'])){
        $_SESSION['questions'][$_SESSION['counter']] = 13;
    }
    elseif(isset($_POST['q14ans'])){
        $_SESSION['questions'][$_SESSION['counter']] = 14;
    }
    elseif(isset($_POST['q15ans'])){
        $_SESSION['questions'][$_SESSION['counter']] = 15;
    }

?>

>>>>>>> Stashed changes

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
        
            
<<<<<<< Updated upstream
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
     
=======
            else if ($a2 == "C") { $totalCorrect+2; }
            
            else if ($a3 == "B") { $totalCorrect+3; }
            
            else if ($a4 == "D") { $totalCorrect++; }
            
            else if ($a5 == "D") { $totalCorrect++; }
            
            else if ($a6 == "A") { $totalCorrect++; }
            
            else if ($a7 == "C") { $totalCorrect++; }
            
            else if ($a8 == "A") { $totalCorrect++; }
            
            else if ($a9 == "C") { $totalCorrect++; }
            
            else if ($a10 == "C") { $totalCorrect++; }
            
            else if ($a11 == "A") { $totalCorrect++; }
            
            else if ($a12 == "C") { $totalCorrect++; }
            
            else if ($a13 == "C") { $totalCorrect++; }
            
            else if ($a14 == "B") { $totalCorrect++; }
            
            else if ($a15 == "C") { $totalCorrect++; }
            
            //else {header("location: winningpage.php");}
            
            echo "<h1><div id='results'>Your score: $totalCorrect / 15 correct</div></h1>";
            echo "<h1><a href='intro.php'>Back to questions</a></div></h1>";
>>>>>>> Stashed changes

            
            
            echo "<div id='results'>$totalCorrect / 15 correct</div>";
            $_SESSION["totalcorrect"] = $totalCorrect;
            $_SESSION["correctincorrect"] = $correctincorrect;
            
        ?>

<h1> Your results is <?=$correctincorrect?></h1> 
<h1>   <a href="intro.php"><h1> Go back to questions </h1> </a>
        	
	
	</div>
 
</body>
 
</html>