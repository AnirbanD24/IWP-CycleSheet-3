<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "cyclesheet3";

$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) 
{
  die("Sorry we failed to connect: ". mysqli_connect_error());
}

$searchQuery = "SELECT Department, COUNT(*) AS numbers FROM employee GROUP BY Department";

$result = mysqli_query($conn, $searchQuery);
$row = mysqli_num_rows($result);
?>


<html>
  <head>
    <title>19BCB0015</title>
    <style>
      table,
      th,
      td {
        border: 1px solid black;
        padding: 1rem;
      }

      table {
        border-collapse: collapse;
      }
    </style>
  </head>

  <body>
    <table>
      <tr>
        <th>Department</th>
        <th>No of Employees</th>
      </tr>
      <?php
      if ($row > 0) {
        while ($data = mysqli_fetch_assoc($result)) {
          $dept = $data['Department'];
          $number = $data['numbers'];
      ?>
          <tr>
            <td><?php echo $dept ?></td>
            <td><?php echo $number ?></td>
          </tr>
      <?php
        }
      }
      ?>
    </table>
  </body>
</html>