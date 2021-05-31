<?php
  $filename = "q4.txt";
  if(copy($filename,"q4copy.txt")){
    echo "Content copied successfully<br><br>";
}
else{
    echo "Could not copy content<br><br>";
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
      <title>Ques4, 19BCB0015</title>
  </head>
  <body>
      <form action="content.php" method="post">
        <div>Click here to view content</div>
        <input type="submit" value="Click">
      </form>
  </body>
</html>