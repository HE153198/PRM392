<?php
$response = array();
$servername = "localhost"; $username = "root"; $password = ""; $dbname = "a2";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if (isset($_POST['name']) && isset($_POST['price']) && isset($_POST['description'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $sql = "INSERT INTO products(name, price, description) VALUES('$name', '$price', '$description')";
if ($conn->query($sql) === TRUE) {
    $response["success"] = 1;
    $response["message"] = "Product successfully created.";
    echo json_encode($response);
} else {
    $response["success"] = 0;
    $response["message"] = "Required field(s) is missing";
    echo json_encode($response);
}
$conn->close();
} else {
    $response["success"] = 0;
    $response["message"] = "Required field(s) is missing";
    echo json_encode($response);
}
?>
