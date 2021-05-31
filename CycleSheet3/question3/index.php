<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Ques3, 19BCB0015</title>
    </head>
    <body>
        <h3>Enter the following details to find the value of nCr:</h3>
        <form action="" method="POST">
        Value of n:
        <input type="text" name="n"><br>
        Value of r:
        <input type="text" name="r"><br>
        <input type="submit" value="Click to get result" name="button"><br>
        </form>
        <?php
        if(isset($_POST['button'])){
            $n=$_POST['n'];
            $r=$_POST['r'];
            function factorial($no){
                $num=$no;
                $fact=1;
                for($i=$num;$i>=1;$i--){
                    $fact=$fact*$i;
                }
                return $fact;
            }
            $result=factorial($n)/(factorial($r)*factorial($n-$r));
            echo "The value of <sup> $n</sup>C<sub>$r</sub> is: ".$result;
        }
        ?>
    </body>
</html>
