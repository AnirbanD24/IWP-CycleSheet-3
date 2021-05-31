<?php
    echo "Welcome <br>";
    $name=$_POST['name'];
    $hour=date("H");
    if($hour>=6 && $hour<12){
        $greeting="Good Morning";
    }
    else if($hour>=12 && $hour<15){
        $greeting="Good Afternoon";
    }
    else if($hour>=15 && $hour<22){
        $greeting="Good Evening";
    }
    else{
        $greeting="Good Night";
    }
    echo $greeting." ".$name;
    $color=$_POST['color'];
    switch($color){
        case 'r':
            echo '<body style="background-color: red;">';
            break;
        case 'g':
            echo '<body style="background-color: green;">';
            break;
        case 'b':
            echo '<body style="background-color: blue;">';
            break;
        case 'w':
            echo '<body style="background-color: white;">';
            break;
        case 'l':
            echo '<body style="background-color: black;">';
            break;
        case 'o':
            echo '<body style="background-color: orange;">';
            break;
    }
    $word=$_POST['string'];
    $a=0;
    $b = strlen($word) - 1;
    $flag = 0;
    while($b>$a){
    if ($word[$a] != $word[$b]){
        $flag = 1;
        break;
    }
    $a++;
    $b--;
    }
    if ($flag == 0){
    echo "<br>".$word." is a Palindrome string.\n";
    }
    else{
    echo "<br>".$word." is not a Palindrome string.\n";
    }
?>
