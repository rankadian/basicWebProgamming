<?php
$totalScore = 650;
echo"Player's total score is : $totalScore";
echo "<br>Do players get additional rewards?";
if ($totalScore > 500) {
    echo"<br>Congratulations, you get a prize";
} else {
echo "<br>Sorry you're unlucky, please try again";
}
