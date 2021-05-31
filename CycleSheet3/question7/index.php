<?php
if (!isset($_COOKIE['name'])) {
  setcookie('name', 'Anirban Dutta', time() + (60 * 60 * 24), "/");
?>
  <script>
    window.location.href = './index.php';
  </script>
<?php
  die();
}
$name = $_COOKIE['name'];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Ques7, 19BCB0015</title>
  </head>
  <body>
    <h2>
      <?php
      echo "Hii " . $name;
      ?>
    </h2>
    <a href="./page.php">Go to next page</a>
  </body>
</html>