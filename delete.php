<?php
    $conn = new mysqli('localhost', 'root', 'mysql', 'to-do-list');
    $conn->set_charset("utf8");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

$id = $_GET['ID'];

$sql = "DELETE FROM `list` WHERE ID='$id'";

if ($conn->query($sql) === TRUE) {
?>
    Item deleted!
    <br>
    <a href="index.php">Home</a>
<?php
    }
?>