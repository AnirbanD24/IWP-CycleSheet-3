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

if (isset($_POST['submit'])) {
  $id = $_POST['id'];
  $sql = "DELETE FROM employee WHERE Id = $id";
  $result = mysqli_query($conn, $sql);

  if($result){
    echo "The Record has been Deleted Successfully!<br><br>";
  }
  else{
    echo "The record was not deleted successfully because of this error ---> ". mysqli_error($conn);
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
  <h2>Delete Employee</h2>
  <form method="POST" name="form">
    <input type="text" name="id" placeholder="Enter a ID to be deleted">
    <input type="submit" name="submit" value="Delete">
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
    $sql1 = 'SELECT * FROM employee';
    $result = mysqli_query($conn, $sql1);
    $row = mysqli_num_rows($result);
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