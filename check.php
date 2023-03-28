
<!DOCTYPE html>

<html>
 
<head>
	<meta charset="UTF-8" />
	
	<title>Results And Answers</title>
	
    <link href="intro.css" type="text/css" rel="stylesheet" />
</head>
 
<body>
 	<form action="winningpage.php" method="POST">
 	<form action="losingpage.php" method="POST">
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
        
            $totalCorrect = 0;
            if ($a1 == "C") { $totalCorrect=1; }
            
            else if ($a2 == "C") { $totalCorrect=2; }
            
            else if ($a3 == "B") { $totalCorrect=3; }
            
            else if ($a4 == "D") { $totalCorrect=4; }
            
            else if ($a5 == "D") { $totalCorrect=5; }
            
            else if ($a6 == "A") { $totalCorrect=6; }
            
            else if ($a7 == "C") { $totalCorrect=7; }
            
            else if ($a8 == "A") { $totalCorrect=8; }
            
            else if ($a9 == "C") { $totalCorrect=9; }
            
            else if ($a10 == "C") { $totalCorrect=10; }
            
            else if ($a11 == "A") { $totalCorrect=11; }
            
            else if ($a12 == "C") { $totalCorrect=12; }
            
            else if ($a13 == "C") { $totalCorrect=13; }
            
            else if ($a14 == "B") { $totalCorrect=14; }
            
            else if ($a15 == "C") {header("location: winningpage.php");}
            
            else {header("location: losingpage.php");}
            
            echo "<h1><div id='results'>Your score: $totalCorrect / 15 correct </br>
            <a href='intro.php'>Continue to the next questions</a></div></h1>";
        ?>
	
	</div>
 
</body>
 
</html>