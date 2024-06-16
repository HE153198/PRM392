<?php
$server="localhost"; $u="root"; $p="";$db="a2";
//create connection
$conn=new mysqli($server,$u,$p,$db);

if (isset($_GET['firstname']) && isset($_GET['lastname']) && isset($_GET['email'])) {

    $email = $_GET['email'];
    $lastname = $_GET['lastname'];
    $firstname = $_GET['firstname'];

    //sql
    $sql="insert into MyGuests (firstname, lastname, email) values ('$firstname','$lastname','$email')";
    if($conn->query($sql)===TRUE){
        echo "New record created successfully";
    }
    else{
        echo "Error: ".$conn->error;
    }
}
$conn->close();
//localhost/000/202406/insert.php?firstname=ben&lastname=tran van&email=ben@gmail.com