<?php
  if (isset($_FILES["file"]) && $_FILES["file"]["error"] == 0) {
    $name = $_FILES["file"]["name"];
    $size = $_FILES["file"]["size"];
    $extension = pathinfo($name, PATHINFO_EXTENSION);
    $temp = $_FILES['file']['tmp_name'];

    if ($extension == "pdf") {
      $max = 5 * 1024 * 1024;

      if ($max > $size) {
        move_uploaded_file($temp, "./data/" . $name);
        echo "File Uploaded Successfully and stored in " . "data/" . $name;
      } 
      else {
        die("<h3>Error: File size is larger than the limit 5 MB</h4>");
      }
    } 
    else {
      die("<h3>Error: File is not a PDF</h3>");
    }
  }
?>
