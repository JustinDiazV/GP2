
<!DOCTYPE html>

<html>
 
<head>
	<meta charset="UTF-8" />
	
	<title>Results And Answers</title>
	
    <link href="intro.css" type="text/css" rel="stylesheet" />
</head>
 
<body>
 
	<div id="wrapper">
 
		<h1> Your results</h1>
		
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
        
            $totalCorrect = 0;
            
            if ($a1 == "C") { $totalCorrect++; }
            if ($a2 == "C") { $totalCorrect++; }
            if ($a3 == "B") { $totalCorrect++; }
            if ($a4 == "D") { $totalCorrect++; }
            if ($a5 == "D") { $totalCorrect++; }
            if ($a6 == "A") { $totalCorrect++; }
            if ($a7 == "C") { $totalCorrect++; }
            if ($a8 == "A") { $totalCorrect++; }
            if ($a9 == "C") { $totalCorrect++; }
            if ($a10 == "C") { $totalCorrect++; }
            if ($a11 == "A") { $totalCorrect++; }
            if ($a12 == "C") { $totalCorrect++; }
            if ($a13 == "C") { $totalCorrect++; }
            if ($a14 == "B") { $totalCorrect++; }
            if ($a15 == "C") { $totalCorrect++; }
            
            echo "<div id='results'>$totalCorrect / 15 correct</div>";
            
        ?>
	
	</div>
 
</body>
 
</html>