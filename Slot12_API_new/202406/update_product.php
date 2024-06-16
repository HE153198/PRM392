<?php
$response = array();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "a2";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);}
if (isset($_POST['pid']) && isset($_POST['name']) && isset($_POST['price']) && isset($_POST['description'])) {
    $pid = $_POST['pid'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $sql = "UPDATE products SET name = '$name', price = '$price', description = '$description' WHERE pid = $pid";
    if ($conn->query($sql) === TRUE) {
        $response["success"] = 1;
        $response["message"] = "Product successfully updated.";
        echo json_encode($response);
    } else {
      echo "Error updating record: " . $conn->error;
    }
    $conn->close();
} else {
    $response["success"] = 0;
    $response["message"] = "Required field(s) is missing";
    echo json_encode($response);
}
?>
