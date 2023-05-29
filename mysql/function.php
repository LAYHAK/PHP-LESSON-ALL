<?php

use LDAP\Result;

include "db.php";
function add(){

    global $connection;
    if(isset($_POST['submit']))
    {

        $username = $_POST['username'];
        $password = $_POST['password'];
        //? Allow User to put special Characterin UserName
        $username=mysqli_real_escape_string($connection,$username);
        $password=mysqli_real_escape_string($connection,$password);

        $hashFormat="$2y$10$";
        $salt="iusesomecrazystringsas";
        $hashF_and_salt=$hashFormat . $salt;
        $password= crypt($password,$hashF_and_salt);

        $query= "INSERT INTO user(Username,Password) ";
        $query.="VALUES ('$username','$password')";
        $result=mysqli_query($connection,$query);

        if(!$result)
        {
            die("Query Failed".mysqli_error($connection));
        }else{
            echo "Record Created";
        }
    }
}
function read(){
    global $connection;
    $query="Select * FROM user;";
    $result=mysqli_query($connection,$query);
    if(!$result){
        die("Query Failed");
    }
    while($row = mysqli_fetch_assoc($result)){
        $id=$row['Id'];
        $username=$row['Username'];
        $password=$row['Password'];


        echo "<tr>
        <td scope='row'>$id</td>
        <td>$username</td>
        <td>$password</td>
        </tr>";
    }
}


function show_option(){
        global $connection;
        $query="Select * FROM user;";
        $result=mysqli_query($connection,$query);
        if(!$result){
            die('Query FAILED');
        }
        while($row = mysqli_fetch_assoc($result)){
            $id=$row['Id'];
            echo "<option value='$id'>$id</option>";
        }
}

function update(){
        global $connection;
    if(isset($_POST['submit']))
    {

        $id=$_POST['id'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        
        $query= "UPDATE user SET ";
        $query.="Username= '$username',";
        $query.="Password='$password'";
        $query.="WHERE Id=$id";
        $result= mysqli_query($connection,$query);
        if(!$result){
            die("Query Failed".mysqli_error($connection));
        }
        else{

            echo"Record Updated";
        }
    }
}

function delete(){
        global $connection;
    if(isset($_POST['submit']))
    {

        $id=$_POST['id'];
        $query= "DELETE FROM user ";
        $query.="WHERE Id=$id";
        $result= mysqli_query($connection,$query);
        if(!$result){
            die("Query Failed".mysqli_error($connection));
        }
        else{
            echo("Delete Completed");
        }
    
    }
}

?>