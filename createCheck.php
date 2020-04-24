<?php
    $conn = new mysqli('localhost', 'root', 'mysql', 'to-do-list');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

$title = $_GET['title_create'];
$description = $_GET['description_create'];

$sql = "INSERT INTO list(title, description) VALUES ('$title', '$description')";

if ($conn->query($sql) === TRUE) {
?>
    Item created!
<?php
} else {
?>
Something went wrong, item not created.
<?php
}
?>
<br>
<a href="index.php">Home</a>
