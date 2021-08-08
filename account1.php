<!-- --Edit account-- -->

<?php 
include('db.php');
//if(isset($_GET['insert'])){
// $name5=$_POST["name5"];
// $lastname5=$_POST["lastname5"];
// $email5=$_POST["email5"];
// $phone5=$_POST["phone5"];



// $query="INSERT INTO account VALUES(null,'$name5','$lastname5','$email5','$phone5')";
// $stmt = $db->prepare($query);
// $stmt->execute();
//header('Location: accounts.php');
//}
//if(isset($_GET['update'])){
$id=$_POST["id"];
$name5=$_POST["name5"];
$lastname5=$_POST["lastname5"];
$email5=$_POST["email5"];
$phone5=$_POST["phone5"];
    
$query="UPDATE account SET name='$name5',lastname='$lastname5',email='$email5',phone='$phone5'  WHERE id=$id";
$stmt = $db->prepare($query);
$stmt->execute();
//}
// $query = 'INSERT INTO account VALUES('NULL',?,?,?,?)';
// $stmt = $db->prepare($query);
// $stmt->bind_param('sssss',$name5,$lastname5,$email5,$phone5);
// $stmt->execute();

?>