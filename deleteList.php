<?php
    $conn = new mysqli('localhost', 'root', 'mysql', 'to-do-list');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }


$table = $_GET['table'];
$sql = "DROP TABLE $table";

if ($conn->query($sql) === TRUE) {
?>
    List deleted!
    <br>
    <a href="index.php">Home</a>
<?php
    }
?>
