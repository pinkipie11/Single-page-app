<?php 

include('db.php');
 $name5=$_POST["name5"];
 $lastname5=$_POST["lastname5"];
 $email5=$_POST["email5"];
 $phone5=$_POST["phone5"];



 $query="INSERT INTO account VALUES(null,'$name5','$lastname5','$email5','$phone5')";
 $stmt = $db->prepare($query);
 $stmt->execute();