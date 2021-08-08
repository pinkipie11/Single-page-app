<?php
                                include('db.php');
                                $upit="SELECT * FROM `account` ORDER BY id DESC";
                                $stmt=$db->prepare($upit);
                                $stmt->execute();
                                $stmt->store_result();
                                $stmt->bind_result($id,$name,$lastname,$email,$phone);
                                
?>
                                

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accounts</title>

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="http://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a href="" class="navbar-brand">Accounts</a>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="index.php" class="nav-link">Accounts</a></li>
            <li class="nav-item"><a href="forma.php" class="nav-link">Add Account</a></li>
            
        </ul>
    </nav>
    <?php
    //echo 'Pozdrav';
    $brojac=0;
echo '<div  style="text-align:center;"><table class="table table-striped col-lg-7" ><thead class="thead-dark"><th>#</th><th>Name</th><th>Lastname</th><th>Email</th><th>Phone</th><th></th><th></th></thead>';
    while($stmt->fetch()){
        $brojac++;
echo '<tr><td>'.$brojac.'</td>
<td>'.$name.'</td>
<td>'.$lastname.'</td>
<td>'.$email.'</td>
<td>'.$phone.'</td>
<td><form action="editform.php" method="POST"><input type="text" value="'.$id.'" name="idEdit"><input type="submit" class="edit-btn btn btn-sm btn-warning form-control" value="Edit"></form></td>
<td><input type="button" class="delete-btn btn btn-sm btn-danger form-control" value="Delete"></td>
';

echo '</tr>';
    }
    echo '</div>';
    ?>
    </body>
    </html>
