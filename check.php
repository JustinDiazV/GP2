
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
        
            $totalCorrect = 0;
            if ($a1 == "C") { $totalCorrect++; }
            
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
            
            else {header("location: winningpage.php");}
            
            echo "<h1><div id='results'>Your score: $totalCorrect / 15 correct</div></h1>";
            echo "<h1><a href='intro.php'>Back to questions</a></div></h1>";

        ?>
	
	</div>
 
</body>
 
</html>