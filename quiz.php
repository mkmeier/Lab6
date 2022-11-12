<head>
	<meta charset="UTF-8" />
	
	<title>Exersize 2</title>
	
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>
 
<body>
 
	<div id="page-wrap">
 
		<h1>Harry Potter Quiz</h1>
		
		<form action="quiz.php" method="post" id="quiz">
		
            <ol>
            
                <li>
                
                    <h3>What spell did Harry use to kill Lord Voldemort?</h3>
                    
                    <?php
            
                        $answer1 = $_POST['question-1-answers'];
                        if($answer1 == "A"){$answer1 = "Expecto Patronum";}
                        if($answer1 == "B"){$answer1 = "Avada Kedavra";}
                        if($answer1 == "C"){$answer1 = "Expelliarmus";}
                        if($answer1 == "D"){$answer1 = "Accio";}

                       
                        echo "<p>Your answer: $answer1<br>Correct answer: Expelliarmus";
            
                    ?>
                
                </li>
                
                <li>
                
                    <h3>Who poses as Mad-Eye Moody, Harry's 4th year Defense Against the Dark Arts professor?</h3>
                    
                    <?php
            
                        $answer2 = $_POST['question-2-answers'];
                        if($answer2 == "A"){$answer2 = "Voldemort";}
                        if($answer2 == "B"){$answer2 = "Peter Pettigrew";}
                        if($answer2 == "C"){$answer2 = "Sirius Black";}
                        if($answer2 == "D"){$answer2 = "Barty Crouch Jr.";}

                       
                        echo "<p>Your answer: $answer2<br>Correct answer: Barty Crouch Jr.";
            
                    ?>
                
                </li>
                
                <li>
                
                    <h3>What was the name of the animal that acted as the snitch in early Quidditch games?</h3>
                    
                    <?php
            
                        $answer3 = $_POST['question-3-answers'];
                        if($answer3 == "A"){$answer3 = "Golden Snidget";}
                        if($answer3 == "B"){$answer3 = "Golden Steen";}
                        if($answer3 == "C"){$answer3 = "Golden Stonch";}
                        if($answer3 == "D"){$answer3 = "Golden Snackett";}

                       
                        echo "<p>Your answer: $answer3<br>Correct answer: Golden Snidget";
            
                    ?>
                
                </li>
                
                <li>
                
                    <h3>When unearthed, a mandrake will do what?</h3>
                    
                    <?php
            
                        $answer4 = $_POST['question-4-answers'];
                        if($answer4 == "A"){$answer4 = "Dance";}
                        if($answer4 == "B"){$answer4 = "Scream";}
                        if($answer4 == "C"){$answer4 = "Burp";}
                        if($answer4 == "D"){$answer4 = "Laugh";}

                       
                        echo "<p>Your answer: $answer4<br>Correct answer: Scream";
            
                    ?>
                
                </li>
                
                <li>
                
                    <h3>Who knocks out the troll in the ladies' bathroom in Harry Potter and the Philosopher's Stone?</h3>
                    
                    <?php
            
                        $answer4 = $_POST['question-4-answers'];
                        if($answer4 == "A"){$answer4 = "Harry";}
                        if($answer4 == "B"){$answer4 = "Ron";}
                        if($answer4 == "C"){$answer4 = "Hermione";}
                        if($answer4 == "D"){$answer4 = "McGonagall";}

                       
                        echo "<p>Your answer: $answer4<br>Correct answer: Ron";
            
                    ?>
                
                </li>
            
            </ol>
            
            <!--<input type="submit" value="Submit" class="submitbtn" />-->
		
		</form>
	
	</div>
 
 
</body>
 
</html>

<!DOCTYPE html>
<html>
 
<head>
	<meta charset="UTF-8" />
	
	<title>Harry Potter Quiz</title>
	
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>
 
<body>
 
	<div id="page-wrap">
 
		<h1>Results</h1>
		
        <?php
            
            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
            $answer5 = $_POST['question-5-answers'];
        
            $totalCorrect = 0;
            
            if ($answer1 == "C") { $totalCorrect++; }
            if ($answer2 == "D") { $totalCorrect++; }
            if ($answer3 == "A") { $totalCorrect++; }
            if ($answer4 == "B") { $totalCorrect++; }
            if ($answer5 == "B") { $totalCorrect++; }
            $percentage = ($totalCorrect / 5) * 100;
            
            echo "<div id='results'>$totalCorrect / 5 correct<br><p>You got $percentage%</p></div>";
            
        ?>
	
	</div>
    <a href="quiz.html"><input type="button" value="Retry" style="width:4.75%;"></a></br>
 
</body>
 
</html>

