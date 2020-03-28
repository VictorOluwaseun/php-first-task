<?php

if (isset($_POST["submit"])) {
  $fname = $_POST["first_name"];
  $lname = $_POST["last_name"];
  $subject = $_POST["subject"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  $myfile = fopen($fname.$lname, "w") or die("Unable to open file!");
  $data = "Firstname: $fname \n Lastname: $lname \n Subject: $subject \n Email: $email \n Message: $message";
  fwrite($myfile, $data);
  fclose($myfile);
}

?>