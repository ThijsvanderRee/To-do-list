<?php
    $conn = new mysqli('localhost', 'root', 'mysql', 'to-do-list');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

$id = $_GET['ID'];
$table = $_GET['table'];

$sql = "DELETE FROM $table WHERE ID='$id'";

if ($conn->query($sql) === TRUE) {
?>
    Item deleted!
    <br>
    <a href="index.php">Home</a>
<?php
    }
?>
