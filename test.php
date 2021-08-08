<?php 

include('db.php');
if(isset($_GET['insert'])){
$rb1=$_POST['rb1'];
$name5=$_POST['name5'];
$lastname5=$_POST['lastname5'];
$email5=$_POST['email5'];
$phone5=$_POST['phone5'];



$query="INSERT INTO account VALUES('NULL','$rb1','$name5','$lastname5','$email5','$phone5')";
$stmt = $db->prepare($query);
$stmt->execute();
}
if(isset($_GET['update'])){
}
// $query = "INSERT INTO account VALUES('NULL',?,?,?,?)";
// $stmt = $db->prepare($query);
// $stmt->bind_param('sssss',$name5,$lastname5,$email5,$phone5);
// $stmt->execute();
?>