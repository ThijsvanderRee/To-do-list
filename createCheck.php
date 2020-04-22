<?php
    $conn = new mysqli('localhost', 'root', 'mysql', 'to-do-list');
    $conn->set_charset("utf8");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

$title = $_GET['title_create'];
$description = $_GET['description_create'];

$sql = "INSERT INTO 'list'('title', 'description') VALUES ('$title', '$description')";

if ($conn->query($sql) === TRUE) {
?>
    Item created!
<?php
    }
?>

<a href="index.php">Home</a>
