<?php
function checkAnswers(){
    $score = 100;
    
    if (($_POST['Q1'] == '3') || ($_POST['Q1'] == '5'))
        $score-=5;
    else if ($_POST['Q1'] != '4')
        $score-=10;
    
    if ($_POST['Q2'] != 'jupiter')
        $score-=10;
    
    if (isset($_POST['Q3']))
    {
        $ans3 = $_POST['Q3'];
        if ($ans3[0] != 'Phobos' || $ans3[1] != 'Deimos')
            $score-=5;
        if ($ans3[0] != 'Phobos' && $ans3[1] != 'Deimos' || count($ans3) == 3)
            $score-=5;
        else if ($ans3[0] != 'Phobos' && $ans3[1] != 'Deimos' || count($ans3) > 3)
            $score-=10;
    }
    else {$score-=10;}
    
    if ($_POST['Q4'] != 'ganymede')
        $score-=10;
    
    if (strtolower($_POST['Q5']) != 'saturn')
        $score-=10;
    
    if ($_POST['Q6'] != 'false')
        $score-=10;

    if ($_POST['Q7'] != '2.54')
        $score-=10;
    
    if (isset($_POST['Q8']))
    {
        $ans8 = $_POST['Q8'];
        if ((!in_array('Venus', $ans8) && !in_array('Mercury', $ans8)) || count($ans8) > 3)
            $score-=10;
        else if ((in_array('Venus', $ans8) || in_array('Mercury', $ans8)) && count($ans8) > 2)
            $score-=5;
        else if (!in_array('Venus', $ans8) || !in_array('Mercury', $ans8))
            $score-=5;
    }
    else {$score-=10;}
    
    if ($_POST['Q9'] != 'Newtonian')
        $score-=10;
    
    if (strtolower($_POST['Q10']) != 'reflector')
        $score-=10;    

    displayScore($score);
}

function displayScore($score)
{
    echo "You scored $score/100 points. ";
    if ($score >= 90){echo "Galileo would be proud of you!";}
    else if ($score > 60){echo "You still have a whole lot to learn.";}
    else {echo "Time to break out the children's encyclopedia of Astronomy.";}
}

?>