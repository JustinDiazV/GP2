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

    if( !isset($_SESSION["totalcorrect"])) {
        $_SESSION["totalcorrect"] = 0;
        
       
        }
        $totalCorrect = $_SESSION["totalcorrect"];

        if( !isset($_SESSION["savedmoney"])) {
            $_SESSION["savedmoney"] = 0;
            
           
            }
            $savedmoney = $_SESSION["savedmoney"];


?>


<!DOCTYPE html>

<html>
 
<head>
	<meta charset="UTF-8" />
	
	<title>Results And Answers</title>
	
    <link href="intro.css" type="text/css" rel="stylesheet" />
</head>
 
<body>
 	<form action="winningpage.php" method="POST">
	<div id="wrapper">
 		
        <?php
        	$score= 0;
            
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
        
            if ($a1 == "C") { $totalCorrect++ ;$savedmoney = $savedmoney + 100;}
            
            else if ($a2 == "C") { $totalCorrect++ ;$savedmoney = $savedmoney + 200; }
            
            else if ($a3 == "B") { $totalCorrect++;$savedmoney = $savedmoney + 300; }
            
            else if ($a4 == "D") { $totalCorrect++;$savedmoney = $savedmoney + 500;}
            
            else if ($a5 == "D") { $totalCorrect++;$savedmoney = $savedmoney + 1000;}
            
            else if ($a6 == "A") { $totalCorrect++;$savedmoney = $savedmoney + 2000;}
            
            else if ($a7 == "C") { $totalCorrect++;$savedmoney =$savedmoney + 4000; }
            
            else if ($a8 == "A") { $totalCorrect++;$savedmoney = $savedmoney + 8000; }
            
            else if ($a9 == "C") { $totalCorrect++;$savedmoney = $savedmoney + 16000;}
            
            else if ($a10 == "C") { $totalCorrect++;$savedmoney = $savedmoney + 32000;}
            
            else if ($a11 == "A") { $totalCorrect++;$savedmoney = $savedmoney + 64000;}
            
            else if ($a12 == "C") { $totalCorrect++;$savedmoney = $savedmoney + 125000;}
            
            else if ($a13 == "C") { $totalCorrect++;$savedmoney = $savedmoney + 250000;}
            
            else if ($a14 == "B") { $totalCorrect++;$savedmoney = $savedmoney + 500000;}
            
            else if ($a15 == "C") { $totalCorrect++;$savedmoney = $savedmoney + 1000000; }
            
            
            else {
                $file = fopen('file.txt', 'a');
		        $text = ';'.$savedmoney."<br>";
		        fwrite($file, $text);
		        fclose($file);
                header("location: loosingpage.php");}

            if($totalCorrect == 15){
                $file = fopen('file.txt', 'a');
		        $text = ':'.$savedmoney."<br>";
		        fwrite($file, $text);
		        fclose($file);
                header("location: winningpage.php");

            }

            $_SESSION["totalcorrect"] = $totalCorrect;
            $_SESSION["savedmoney"] = $savedmoney;

            
            echo "<h1><div id='results'>Your score: $totalCorrect / 15 correct</div></h1>";
            echo "<h1>Money earned: $savedmoney</h1>";
            echo "<h1><a href='intro.php'>Back to questions</a></div></h1>";
            ?>
	
	</div>
 
</body>
 
</html>