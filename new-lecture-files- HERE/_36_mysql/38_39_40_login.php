<?php 

if(isset($_POST['submit'])) {
   
$username = $_POST['username'];
$password = $_POST['password'];
    
    
$connection = mysqli_connect('localhost', 'root', 'root', 'login_App');    
    
    if($connection) {
    
    echo "We are connected";
    
    } else {
    
    die("Database connection failed");
    
    }
    
    
    
    
    
    
    
    
    
    
//    if($username && $password) {
//    echo $username;
//    echo $password; 
//    
//    } else {
//    
//        echo "this field cannot be blank";
//    
//    }
// 

    

    
    
}


?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">

        <div class="col-sm-6">
            <form action="38_39_40_login.php" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control">
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>

                <button class="btn btn-primary" name="submit">Submit</button>

            </form>
        </div>





    </div>
</body>

</html>