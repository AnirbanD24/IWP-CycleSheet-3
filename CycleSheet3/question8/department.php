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
else
{
  if (isset($_POST['submit'])) {
    $department = $_POST['department'];
    $searchQuery = "SELECT * FROM employee WHERE Department='$department'";
    $result = mysqli_query($conn, $searchQuery);
    $row = mysqli_num_rows($result);
  }
}
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
  <h2>Department Records</h2>
  <form method="POST" name="form">
    <input type="text" name="department" placeholder="Enter a Department Name">
    <input type="submit" name="submit" value="Search">
  </form>
  <table>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Department</th>
      <th>DOB</th>
      <th>Salary</th>
    </tr>
    <?php

    if ($row > 0) {
      while ($data = mysqli_fetch_assoc($result)) {
        $id = $data['Id'];
        $name = $data['Name'];
        $dob = $data['DOB'];
        $dept = $data['Department'];
        $salary = $data['Salary'];
        $dob = date("d-m-Y", strtotime($dob));
    ?>
        <tr>
          <td><?php echo $id ?></td>
          <td><?php echo $name ?></td>
          <td><?php echo $dept ?></td>
          <td><?php echo $dob ?></td>
          <td><?php echo $salary ?></td>
        </tr>
    <?php
      }
    } else {
      echo "<tr><td align='center' colspan='5'>No Records Found</td></tr>";
    }
    ?>
  </table>
</body>

</html>