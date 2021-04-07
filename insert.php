<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert file</title>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database= "formdata";

// Create connection
$connect = new mysqli($servername, $username, $password, $database);



// Check connection
if ($connect->connect_error) {
 die('Could not connect : ' . $connect->error);
} 


$sql = "INSERT INTO nametable (firstname, lastname)
VALUES ('$_POST[fname]', '$_POST[lname]')";

if ($connect->query($sql) === TRUE) {
  echo "$_POST[fname] successfully added";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}



  $connect ->close();
?>




</body>
</html>