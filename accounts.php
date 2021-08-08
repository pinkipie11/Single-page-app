<?php
                                include('db.php');
                                $upit="SELECT * FROM `account`";
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
            <li class="nav-item"><a href="accounts-view" class="nav-link">Accounts</a></li>
            <li class="nav-item"><a href="add-account-view" class="nav-link">Add Account</a></li>
            <li class="nav-item"><a href="forma.php" class="nav-button btn-primary">Dodaj Račun</a></li>
        </ul>
    </nav>
    <div class="container-fluid">
        <!-- Accounts View -->
        <div class="row view" id="accounts-view">
            <div class="col-10 offset-1">
                <h2 class="display-4 m-4">Accounts</h2>
                <div class="row">
                    <div class="col-8 offset-2">
                        <table class="table table-striped">
                            <thead class="thead-dark ">
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>LastName</th>
                                    <th>Email</th>
                                    <th>Phone</th>                                    
                                </tr>
                            </thead>
                
                            <tbody id="accounts-table-body">
                            
                                 <!-- php prikaz -->
                                <?php
                                $counter=0;
                                while($stmt->fetch()){
                                    $counter++;
                                    echo "<tr><td>$counter</td>
                                    <td>$name</td>
                                    <td>$lastname</td>
                                    <td>$email</td>
                                    <td>$phone<td>                              
                                    </tr>";
                                }
                                ?>
                                <!-- php prikaz kraj -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Accounts view end -->
        <!-- Add Account view -->
        <div class="row view" id="add-account-view">
            <div class="col-10 offset-1">
                <h2 class="display-4 m-4">Add Account</h2>
                <div class="row">
                    <div class="col-8 offset-2">
                        <!-- <form action="account1.php" method="POST"> -->
                            <input type="text" class="form-control" placeholder="name" id="name5" name="name5"><br>
                            <input type="text" class="form-control" placeholder="lastname" id="lastname5" name="lastname5"><br>
                            <input type="text" class="form-control" placeholder="email" id="email5" name="email5"><br>
                            <input type="text" class="form-control" placeholder="phone" id="phone5" name="phone5"><br>
                            <button id="save" input type="submit" class="form-control btn btn-info">Save</button>
                        <!-- </form> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Add Account View End -->
        <!-- Edit Account View -->
        <div class="row view" id="edit-account-view">
            <div class="col-10 offset-1">
                <h2 class="display-4 m-4">Edit Account</h2>
                <div class="row">
                    <div class="col-8 offset-2">
                        <input type="text" class="form-control eId"><br>
                        <input type="text" class="form-control eName"><br>
                        <input type="text" class="form-control eLastName"><br>
                        <input type="text" class="form-control eEmail"><br>
                        <input type="text" class="form-control ePhone"><br>
                        <button id="edit" class="form-control btn btn-warning">Edit</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Edit Account View End -->
    </div>
    <!-- <script src="db.js"></script> -->
    <script src="main.js"></script>
</body>
<script>
$("#snimi").on('click',function(){

var name5 = $('#name5').val();
console.log(name5);

// var lastname5 = $('#lastname5').val();
// console.log(lastname5);

// var email5 = $('#email5').val();
// console.log(email5);

// var phone5 = $('#phone5').val();
// console.log(phone5);

});
</script>
</html>