<?php
$response = array();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "a2";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if (isset($_POST['pid'])) {
    $pid = $_POST['pid'];
    $sql = "DELETE FROM products WHERE pid = $pid";
    if ($conn->query($sql) === TRUE) {
        $response["success"] = 1;
        $response["message"] = "Product successfully deleted";
        echo json_encode($response);
    } else {
        $response["success"] = 0;
        $response["message"] = "No product found";
        echo json_encode($response);
    }
    $conn->close();
} else {
    $response["success"] = 0;
    $response["message"] = "Required field(s) is missing";
    echo json_encode($response);
}
?>
