<?php
    echo "The content of file q4.txt is: <br>";
    $filename = "q4.txt";
    $file = fopen($filename, "r");
    $contents = fread($file, filesize($filename));
    echo $contents;
    fclose($file);

    echo "<br><br> The content of file q4copy.txt is: <br>";
    $filename = "q4copy.txt";
    $file = fopen($filename, "r");
    $contents = fread($file, filesize($filename));
    echo $contents;
    fclose($file);
?>