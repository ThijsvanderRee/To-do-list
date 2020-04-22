<?php
    $conn = new mysqli('localhost', 'root', 'mysql', 'to-do-list');
    $conn->set_charset("utf8");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

$id = $_GET['ID'];
$title = $_GET['title'];
$description = $_GET['description'];

$sql = "UPDATE list SET 'title' = '$title', 'description' = '$description' WHERE ID = '$id'";
echo $id;

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
