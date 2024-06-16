<?php
$server="localhost"; $u="root"; $p="";$db="a2";
//create connection
$conn=new mysqli($server,$u,$p,$db);

if (isset($_GET['firstname']) && isset($_GET['lastname']) && isset($_GET['email'])&& isset($_GET['id'])) {

    $email = $_GET['email'];
    $lastname = $_GET['lastname'];
    $firstname = $_GET['firstname'];
    $id = $_GET['id'];

    //sql
    $sql="UPDATE MyGuests SET firstname= '$firstname',
    firstname='$lastname', email='$email' WHERE id='$id'";
    if($conn->query($sql)===TRUE){
        echo " record updated successfully";
    }
    else{
        echo "Error: ".$conn->error;
    }
}
$conn->close();
//localhost/000/202406/update.php?firstname=ben update&lastname=tran van update&email=ben@gmail.com&id=204