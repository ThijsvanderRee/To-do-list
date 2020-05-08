<?php
    $conn = new mysqli('localhost', 'root', 'mysql', 'to-do-list');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

$id = $_GET['save'];
$title = $_GET['title_edit'];
$description = $_GET['description_edit'];

$sql = "UPDATE list SET title = '$title', description = '$description' WHERE ID = '$id'";

if ($conn->query($sql) === TRUE) {
?>
    Your changes are saved!
<?php
} else {
  ?>
    Oh no! Something went wrong...
  <?php
}
?>
<br>
<a href="index.php">Home</a>
