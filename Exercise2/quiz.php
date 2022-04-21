<html>
<body>
    <p>Question 1: What is 5+5?</p>
    <p> You answered: <?php $question1 = $_POST["q1"]; echo " " . $question1 . " "; ?></p>
    <p> The correct answer: 10;
       
    <p>Question 2: What is 10+10?</p>
    <p> You answered: <?php $question1 = $_POST["q2"]; echo " " . $question1 . " "; ?></p>
    <p> The correct answer: 20;

    <p>Question 3: What is 15+15?</p>
    <p> You answered: <?php $question1 = $_POST["q3"]; echo " " . $question1 . " "; ?></p>
    <p> The correct answer: 30;

    <p>Question 4: What is 20+20?</p>
    <p> You answered: <?php $question1 = $_POST["q4"]; echo " " . $question1 . " "; ?></p>
    <p> The correct answer: 40;

    <p>Question 5: What is 25+25?</p>
    <p> You answered: <?php $question1 = $_POST["q5"]; echo " " . $question1 . " "; ?></p>
    <p> The correct answer: 50;


<?php
    //access the global array called $_POST to get the values from the text
    $numRight = 0;
    $question1 = $_POST["q1"];
    $question2 = $_POST["q2"];
    $question3 = $_POST["q3"];
    $question4 = $_POST["q4"];
    $question5 = $_POST["q5"];
    $percentage;

    if ($question1 == 10) {
        $numRight++;
    }
    if ($question2 == 20) {
        $numRight++;
    }
    if ($question3 == 30) {
        $numRight++;
    }
    if ($question4 == 40) {
        $numRight++;
    }
    if ($question5 == 50) {
        $numRight++;
    }

    echo "<p> Number Correct: " . $numRight . "</p>";
    $percentage = ($numRight / 5) * 100;
    echo "<p> Percentage Correct: " . $percentage . "%</p>";
?>

</body>
</html>