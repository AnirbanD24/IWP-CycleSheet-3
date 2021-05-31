<?php
// Connecting to the Database
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
    $name = $_POST['name'];
    $dob = $_POST['dob'];
    $department = $_POST['department'];
    $salary = $_POST['salary'];

    $date = date("Y-m-d", strtotime($dob));

    $sql = "INSERT INTO employee (Name, DOB, Department, Salary)  VALUES ('$name', '$date', '$department', $salary)";
    $result = mysqli_query($conn, $sql);

    if($result){
      echo "The record has been inserted successfully!<br><br>";
    }
    else{
      echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
    }
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
  <h2>Employee Table Records:</h2>
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