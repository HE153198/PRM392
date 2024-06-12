<?php
$server="localhost"; $u="root"; $p="";$db="a2";
//create connection
$conn=new mysqli($server,$u,$p,$db);

if (isset($_GET['id'])) {


    $id = $_GET['id'];

    //sql
    $sql="DELETE from MyGuests WHERE id='$id'";
    if($conn->query($sql)===TRUE){
        echo " record deleted successfully";
    }
    else{
        echo "Error: ".$conn->error;
    }
}
$conn->close();
//localhost/000/202406/delete.php?id=204