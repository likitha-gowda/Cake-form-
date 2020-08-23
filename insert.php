<?php
include "test.php";

$fullname= $_POST['name'];
$email=$_POST['email'];
$phonenumber=$_POST['phone'];
$address=$_POST['add'];

$sql = "INSERT INTO form(fullname, email, phonenumber, address)VALUES ('$fullname', '$email','$phonenumber' ,'$address')";

if (mysqli_query($cse, $sql)) {
  echo "Thank you,we will contact u soon";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($cse);
}
//include 'org.php';//to fetch or to see the table contents
mysqli_close($cse);
?>


