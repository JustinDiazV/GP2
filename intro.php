<?php
session_start()
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>nerdLuv</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <link href="intro.css" type="text/css" rel="stylesheet" />
	</head>
    <body>
        <div class="center">
            <div class="navbar">
                <!-- <button>50:50</button> 
                <button><i class="fa-solid fa-phone-volume"></i></button>
                <button><i class="fa-solid fa-people-group"></i></button> -->

            </div>
            <div class="btn-group">
            <form action="check.php" method="post" id="quiz">
                <audio controls autoplay>

                    <source src="Who Wants to Be a Millionaire - Music - 32000.mp3" type="audio/mp3">
                  Your browser does not support the audio element.
                  </audio>
                <input class="questionsUp" type="checkbox" id="q1">
                <input class="questionsUp" type="checkbox" id="q2">
                <input class="questionsUp" type="checkbox" id="q3">
                <input class="questionsUp" type="checkbox" id="q4">
                <input class="questionsUp" type="checkbox" id="q5">
                <input class="questionsUp" type="checkbox" id="q6">
                <input class="questionsUp" type="checkbox" id="q7">
                <input class="questionsUp" type="checkbox" id="q8">
                <input class="questionsUp" type="checkbox" id="q9">
                <input class="questionsUp" type="checkbox" id="q10">
                <input class="questionsUp" type="checkbox" id="q11">
                <input class="questionsUp" type="checkbox" id="q12">
                <input class="questionsUp" type="checkbox" id="q13">
                <input class="questionsUp" type="checkbox" id="q14">
                <input class="questionsUp" type="checkbox" id="q15">
                
                <section class="money"> 
                <!--game navigation-->
                <ul class="inOrder">

                    
                    <li class="Initems">
                        <?php 
                        $c = "button";
                        $c2 = "button";
                        $c3 = "button";
                        $c4 = "button";
                        $c5 = "button";
                        $c6 = "button";
                        $c7 = "button";
                        $c8 = "button";
                        $c9 = "button";
                        $c10 = "button";
                        $c11 = "button";
                        $c12 = "button";
                        $c13 = "button";
                        $c14 = "button";
                        $c15 = "button";

                        if(in_array(15, $_SESSION['questions'])){
                            $c15 = "hidden";
                        }
                        if(in_array(14, $_SESSION['questions'])){
                            $c14 = "hidden";
                        } 
                        if(in_array(13, $_SESSION['questions'])){
                            $c13 = "hidden";
                        }
                        if(in_array(12, $_SESSION['questions'])){
                            $c12 = "hidden";
                        } 
                        if(in_array(11, $_SESSION['questions'])){
                            $c11 = "hidden";
                        } 
                        if(in_array(10, $_SESSION['questions'])){
                            $c10 = "hidden";
                        } 
                        if(in_array(9, $_SESSION['questions'])){
                            $c9 = "hidden";
                        } 
                        if(in_array(8, $_SESSION['questions'])){
                            $c8 = "hidden";
                        } 
                        if(in_array(7, $_SESSION['questions'])){
                            $c7 = "hidden";
                        } 
                        if(in_array(6, $_SESSION['questions'])){
                            $c6 = "hidden";
                        } 
                        if(in_array(5, $_SESSION['questions'])){
                            $c5 = "hidden";
                        } 
                        if(in_array(4, $_SESSION['questions'])){
                            $c4 = "hidden";
                        } 
                        if(in_array(3, $_SESSION['questions'])){
                            $c3 = "hidden";
                        } 
                        if(in_array(2, $_SESSION['questions'])){
                            $c2 = "hidden";
                        } 
                        if(in_array(1, $_SESSION['questions'])){
                            $c = "hidden";
                        }  
                            ?>
                        
                   <!--  Finish hidden --> <label for="q15" tabindex="0" class=<?=$c15?>>$1,000,000</label>
                    </li>
                    <li class="Initems">
                    <label for="q14" tabindex="0" class=<?=$c14?>>$500,000</label>
                    </li>
                    <li class="Initems">
                        <label for="q13" tabindex="0" class=<?=$c13?>>$250,000</label>
                    </li>
                    <li class="Initems">
                        <label for="q12" tabindex="0" class=<?=$c12?>>$125,000</label>
                    </li>
                    <li class="Initems">
                        <label for="q11" tabindex="0" class=<?=$c11?>>$64,000</label>
                    </li>
                    <li class="Initems">
                        <label for="q10" tabindex="0" class=<?=$c10?>>$32,000</label>
                    </li>
                    <li class="Initems">
                        <label for="q9" tabindex="0" class=<?=$c9?>>$16,000</label>
                    </li>
                    <li class="Initems">
                        <label for="q8" tabindex="0" class=<?=$c8?>>$8,000</label>
                    </li>
                    <li class="Initems">
                        <label for="q7" tabindex="0" class=<?=$c7?>>$4,000</label>
                    </li>
                    <li class="Initems">
                        <label for="q6" tabindex="0" class=<?=$c6?>>$2,000</label>
                    </li>                    
                    <li class="Initems">
                        <label for="q5" tabindex="0" class=<?=$c5?>>$1,000</label>
                    </li>
                    <li class="Initems">
                        <label for="q4" tabindex="0" class=<?=$c4?>>$500</label>
                    </li> 
                    <li class="Initems">
                        <label for="q3" tabindex="0" class=<?=$c3?>>$300</label>
                    </li>                    
                    <li class="Initems">
                        <label for="q2" tabindex="0" class=<?=$c2?>>$200</label>
                    </li>
                    <li class="Initems">
                        <label for="q1" tabindex="0" class=<?=$c?>>$100</label>
                    </li>
                </ul>
                </section>


             
                <section class="popup common-content" id="aq15">
                    <h2>What type of animal is a Flemish giant?</h2>
                    <div class="options">
                        <div class="op1">
                            <input type="radio" name="q15ans" id="q15ansA" value="A" />
                            <label for="q15ansA"> A) Monkey </label>
                        </div>
                        
                        <div class="op2">
                            <input type="radio" name="q15ans" id="q15ansB" value="B" />
                            <label for="q15ansB"> B) Orangutans</label>
                        </div>
                        
                        <div class="op3">
                            <input type="radio" name="q15ans" id="q15ansC" value="C" />
                            <label for="q15ansC"> C) Rabbit</label>
                        </div>
                        
                        <div class="op4">
                            <input type="radio" name="q15ans" id="q15ansD" value="D" />
                            <label for="q15ansD"> D) Dog</label>
                        </div>
                    </div>
                    <input type="submit" value="Submit" class="submitbtn" />
                    <label for="q15" tabindex="0" class="button">close popup</label>
                </section> 
                <section class="popup common-content" id="aq14">
                    <h2>What country touches the Indian Ocean, the Arabian Sea, and the Bay of Bengal? </h2>
                    <div class="options">
                        <div class="op1">
                            <input type="radio" name="q14ans" id="q14ansA" value="A" />
                            <label for="q14ansA"> A) Bangladesh </label>
                        </div>
                        
                        <div class="op2">
                            <input type="radio" name="q14ans" id="q14ansB" value="B" />
                            <label for="q14ansB"> B) India</label>
                        </div>
                        
                        <div class="op3">
                            <input type="radio" name="q14ans" id="q14ansC" value="C" />
                            <label for="q14ansC"> C) Jamaica</label>
                        </div>
                        
                        <div class="op4">
                            <input type="radio" name="q14ans" id="q14ansD" value="D" />
                            <label for="q14ansD"> D) Egypt</label>
                        </div>
                    </div>
                    <input type="submit" value="Submit" class="submitbtn" />
                    <label for="q14" tabindex="0" class="button">close popup</label>
                </section>
                 <section class="popup common-content" id="aq13">
                    <h2>Demolition of the Berlin wall separating East and West Germany began in what year?</h2>
                    <div class="options">
                        <div class="op1">
                            <input type="radio" name="q13ans" id="q13ansA" value="A" />
                            <label for="q13ansA">A) 1920 </label>
                        </div>
                        
                        <div class="op2">
                            <input type="radio" name="q13ans" id="q13ansB" value="B" />
                            <label for="q13ansB"> B) 1850</label>
                        </div>
                        
                        <div class="op3">
                            <input type="radio" name="q13ans" id="q13ansC" value="C" />
                            <label for="q13ansC"> C) 1989</label>
                        </div>
                        
                        <div class="op4">
                            <input type="radio" name="q13ans" id="q13ansD" value="D" />
                            <label for="q13ansD">D)2001</label>
                        </div>
                    </div>
                    <input type="submit" value="Submit" class="submitbtn" />
                    <label for="q13" tabindex="0" class="button">close popup</label>
                </section>
                 <section class="popup common-content" id="aq12">
                    <h2>Which is the only American Football team to go a whole season undefeated, including the Super Bowl? </h2>
                    <div class="options">
                        <div class="op1">
                            <input type="radio" name="q1ans" id="q12ansA" value="A" />
                            <label for="q12ansA"> A) Miami Heat(2010) </label>
                        </div>
                        
                        <div class="op2">
                            <input type="radio" name="q12ans" id="q12ansB" value="B" />
                            <label for="q12ansB">B) Florida Gators(1932)</label>
                        </div>
                        
                        <div class="op3">
                            <input type="radio" name="q12ans" id="q12ansC" value="C" />
                            <label for="q12ansC">C) The Miami Dolphins(1972)</label>
                        </div>
                        
                        <div class="op4">
                            <input type="radio" name="q12ans" id="q12ansD" value="D" />
                            <label for="q12ansD"> D) None of the above</label>
                        </div>
                    </div>
                    <input type="submit" value="Submit" class="submitbtn" />
                    <label for="q12" tabindex="0" class="button">close popup</label>
                </section>
                <section class="popup common-content" id="aq11">
                    <h2>What is the loudest animal on Earth? </h2>
                    <div class="options">
                        <div class="op1">
                            <input type="radio" name="q11ans" id="q11ansA" value="A" />
                            <label for="q11ansA">A) Sperm Whale</label>
                        </div>
                        
                        <div class="op2">
                            <input type="radio" name="q11ans" id="q11ansB" value="B" />
                            <label for="q11ansB">B) Mandrake </label>
                        </div>
                        
                        <div class="op3">
                            <input type="radio" name="q11ans" id="q11ansC" value="C" />
                            <label for="q11ansC">C) Octopus </label>
                        </div>
                        
                        <div class="op4">
                            <input type="radio" name="q11ans" id="q11ansD" value="D" />
                            <label for="q11ansD">D) Chihuahua </label>
                        </div>
                    </div>
                    <input type="submit" value="Submit" class="submitbtn" />
                    <label for="q11" tabindex="0" class="button">close popup</label>
                </section>
                <section class="popup common-content" id="aq10">
                    <h2>Which of Newton's Laws states that 'for every action, there is an equal and opposite reaction?' </h2>
                    <div class="options">
                        <div class="op1">
                            <input type="radio" name="q10ans" id="q10ansA" value="A" />
                            <label for="q10ansA">A) The first law of motion </label>
                        </div>
                        
                        <div class="op2">
                            <input type="radio" name="q10ans" id="q10ansB" value="B" />
                            <label for="q10ansB">B) Thermodynamics</label>
                        </div>
                        
                        <div class="op3">
                            <input type="radio" name="q10ans" id="q10ansC" value="C" />
                            <label for="q10ansC"> C) The third law of motion</label>
                        </div>
                        
                        <div class="op4">
                            <input type="radio" name="q10ans" id="q10ansD" value="D" />
                            <label for="q10ansD">D) The second law of motion</label>
                        </div>
                    </div>
                    <input type="submit" value="Submit" class="submitbtn" />
                    <label for="q10" tabindex="0" class="button">close popup</label>
                </section>
                <section class="popup common-content" id="aq9">
                    <h2>A group of ravens is known as? </h2>
                    <div class="options">
                        <div class="op1">
                            <input type="radio" name="q9ans" id="q9ansA" value="A" />
                            <label for="q9ansA">A) Muder </label>
                        </div>
                        
                        <div class="op2">
                            <input type="radio" name="q9ans" id="q9ansB" value="B" />
                            <label for="q9ansB"> B)Fowl </label>
                        </div>
                        
                        <div class="op3">
                            <input type="radio" name="q9ans" id="q9ansC" value="C" />
                            <label for="q9ansC"> C) Unkindness</label>
                        </div>
                        
                        <div class="op4">
                            <input type="radio" name="q9ans" id="q9ansD" value="D" />
                            <label for="q9ansD">D) Devotees</label>
                        </div>
                    </div>
                    <input type="submit" value="Submit" class="submitbtn" />
                    <label for="q9" tabindex="0" class="button">close popup</label>
                </section>
                <section class="popup common-content" id="aq8">
                    <h2>Which monarch officially made Valentine's Day a holiday in 1537? </h2>
                    <div class="options">
                        <div class="op1">
                            <input type="radio" name="q8ans" id="q8ansA" value="A" />
                            <label for="q8ansA">A) Henry VII </label>
                        </div>
                        
                        <div class="op2">
                            <input type="radio" name="q8ans" id="q8ansB" value="B" />
                            <label for="q8ansB"> B) Margret Thatcher</label>
                        </div>
                        
                        <div class="op3">
                            <input type="radio" name="q8ans" id="q8ansC" value="C" />
                            <label for="q8ansC">C) Julius Caeser</label>
                        </div>
                        
                        <div class="op4">
                            <input type="radio" name="q8ans" id="q8ansD" value="D" />
                            <label for="q8ansD">D) George Washington</label>
                        </div>
                    </div>
                    <input type="submit" value="Submit" class="submitbtn" />
                    <label for="q8" tabindex="0" class="button">close popup</label>
                </section>
                <section class="popup common-content" id="aq7">
                    <h2>Who was the first woman to win a Nobel Prize (in 1903)? </h2>
                    <div class="options">
                        <div class="op1">
                            <input type="radio" name="q7ans" id="q7ansA" value="A" />
                            <label for="q7ansA"> A) Maya Angelou </label>
                        </div>
                        
                        <div class="op2">
                            <input type="radio" name="q7ans" id="q7ansB" value="B" />
                            <label for="q7ansB">B) Susan B. Anthony</label>
                        </div>
                        
                        <div class="op3">
                            <input type="radio" name="q7ans" id="q7ansC" value="C" />
                            <label for="q7ansC">C) Marie Curie</label>
                        </div>
                        
                        <div class="op4">
                            <input type="radio" name="q7ans" id="q7ansD" value="D" />
                            <label for="q7ansD">D) Clara Barton</label>
                        </div>
                    </div>
                    <input type="submit" value="Submit" class="submitbtn" />
                    <label for="q7" tabindex="0" class="button">close popup</label>
                </section>
                <section class="popup common-content" id="aq6">
                    <h2>What was the first toy to be advertised on television? </h2>
                    <div class="options">
                        <div class="op1">
                            <input type="radio" name="q6ans" id="q6ansA" value="A" />
                            <label for="q6ansA"> A) Mr Potato Head </label>
                        </div>
                        
                        <div class="op2">
                            <input type="radio" name="q6ans" id="q6ansB" value="B" />
                            <label for="q6ansB"> B) Barbie </label>
                        </div>
                        
                        <div class="op3">
                            <input type="radio" name="q6ans" id="q6ansC" value="C" />
                            <label for="q6ansC">C) Willi Wonka</label>
                        </div>
                        
                        <div class="op4">
                            <input type="radio" name="q6ans" id="q6ansD" value="D" />
                            <label for="q6ansD">D) Barney </label>
                        </div>
                    </div>
                    <input type="submit" value="Submit" class="submitbtn" />
                    <label for="q6" tabindex="0" class="button">close popup</label>
                </section>
                <section class="popup common-content" id="aq5">
                    <h2>The first dictionary was written by?</h2>
                    <div class="options">
                        <div class="op1">
                            <input type="radio" name="q5ans" id="q5ansA" value="A" />
                            <label for="q5ansA"> A) Tom Ford </label>
                        </div>
                        
                        <div class="op2">
                            <input type="radio" name="q5ans" id="q5ansB" value="B" />
                            <label for="q5ansB"> B) F. Scott Fitzgerald </label>
                        </div>
                        
                        <div class="op3">
                            <input type="radio" name="q5ans" id="q5ansC" value="C" />
                            <label for="q5ansC"> C) Thomas Edison</label>
                        </div>
                        
                        <div class="op4">
                            <input type="radio" name="q5ans" id="q5ansD" value="D" />
                            <label for="q5ansD">D) Robert Cawdrey</label>
                        </div>
                    </div>
                    <input type="submit" value="Submit" class="submitbtn" />
                    <label for="q5" tabindex="0" class="button">close popup</label>
                </section>
                <section class="popup common-content" id="aq4">
                    <h2>Which Disney Princess talks to the most animals?</h2>
                    <div class="options">
                        <div class="op1">
                            <input type="radio" name="q4ans" id="q4ansA" value="A" />
                            <label for="q4ansA">A) Aurora </label>
                        </div>
                        
                        <div class="op2">
                            <input type="radio" name="q4ans" id="q4ansB" value="B" />
                            <label for="q4ansB">B) Cinderella </label>
                        </div>
                        
                        <div class="op3">
                            <input type="radio" name="q4ans" id="q4ansC" value="C" />
                            <label for="q4ansC">C) Tiana </label>
                        </div>
                        
                        <div class="op4">
                            <input type="radio" name="q4ans" id="q4ansD" value="D" />
                            <label for="q4ansD">D) Snow White </label>
                        </div>
                    </div>
                    <input type="submit" value="Submit" class="submitbtn" />
                    <label for="q4" tabindex="0" class="button">close popup</label>
                </section>
                <section class="popup common-content" id="aq3">
                    <h2>What is the rarest M&M color? </h2>
                    <div class="options">
                        <div class="op1">
                            <input type="radio" name="q3ans" id="q3ansA" value="A" />
                            <label for="q3ansA">A) Red </label>
                        </div>
                        
                        <div class="op2">
                            <input type="radio" name="q3ans" id="q3ansB" value="B" />
                            <label for="q3ansB">B) Brown </label>
                        </div>
                        
                        <div class="op3">
                            <input type="radio" name="q3ans" id="q3ansC" value="C" />
                            <label for="q3ansC">C) Pink </label>
                        </div>
                        
                        <div class="op4">
                            <input type="radio" name="q3ans" id="q3ansD" value="D" />
                            <label for="q3ansD">D) Green </label>
                        </div>
                    </div>
                    <input type="submit" value="Submit" class="submitbtn" />
                    <label for="q3" tabindex="0" class="button">close popup</label>
                </section>
                <section class="popup common-content" id="aq2">
                    <h2>Which country consumes the most chocolate per capita? </h2>
                    <div class="options">
                        <div class="op1">
                            <input type="radio" name="q2ans" id="q2ansA" value="A" />
                            <label for="q2ansA">A) Belgium </label>
                        </div>
                        
                        <div class="op2">
                            <input type="radio" name="q2ans" id="q2ansB" value="B" />
                            <label for="q2ansB">B) Bali </label>
                        </div>
                        
                        <div class="op3">
                            <input type="radio" name="q2ans" id="q2ansC" value="C" />
                            <label for="q2ansC">C) Switzerland </label>
                        </div>
                        
                        <div class="op4">
                            <input type="radio" name="q2ans" id="q2ansD" value="D" />
                            <label for="q2ansD">D) Greenland </label>
                        </div>
                    </div>
                    <input type="submit" value="Submit" class="submitbtn" />
                    <label for="q2" tabindex="0" class="button">close popup</label>
                </section>
                
                <section class="popup common-content" id="aq1">
                    <h2>What is the name of the man who launched eBay back in 1995?</h2>
                <div class="options">
                    <div class="op1">
                        <input type="radio" name="q1ans" id="q1ansA" value="A" />
                        <label for="q1ansA">A) George Washington </label>
                    </div>
                    
                    <div class="op2">
                        <input type="radio" name="q1ans" id="q1ansB" value="B" />
                        <label for="q1ansB">B) Henry Luois </label>
                    </div>
                    
                    <div class="op3">
                        <input type="radio" name="q1ans" id="q1ansC" value="C" />
                        <label for="q1ansC">C) Pierre Omidyar </label>
                    </div>
                    
                    <div class="op4">
                        <input type="radio" name="q1ans" id="q1ansD" value="D" />
                        <label for="q1ansD">D) None of the above </label>
                    </div>
                </div>
                    <input type="submit" value="Submit" class="submitbtn" />
                    <label for="q1" tabindex="0" class="button">close popup</label>
                </section>
            
            </form>
              </div>

              
        </div>
       





        


    </body>
</html>