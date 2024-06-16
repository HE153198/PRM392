<?php
$response = array();
$servername = "localhost"; $username = "root"; $password = ""; $dbname = "a2";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$result = $conn->query("SELECT *FROM products");
if ($result->num_rows > 0) {

    $response["products"] = array();
    while($row = $result->fetch_assoc()) {
        $product = array();
        $product["pid"] = $row["pid"];
        $product["name"] = $row["name"];
        $product["price"] = $row["price"];
        $product["description"] = $row["description"];
        $product["created_at"] = $row["created_at"];
        $product["updated_at"] = $row["updated_at"];
        array_push($response["products"], $product);
    }
    $response["success"] = 1;
    echo json_encode($response);
} else {
    $response["success"] = 0;
    $response["message"] = "No products found";
    echo json_encode($response);
}
?>
