<?php
$server="localhost"; $u="root"; $p="";$db="a2";
//create connection
$conn=new mysqli($server,$u,$p,$db);

if (isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email'])&& isset($_POST['id'])) {

    $email = $_POST['email'];
    $lastname = $_POST['lastname'];
    $firstname = $_POST['firstname'];
    $id = $_POST['id'];

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