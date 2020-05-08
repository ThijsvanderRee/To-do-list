<?php
    $conn = new mysqli('localhost', 'root', 'mysql', 'to-do-list');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

$id = $_GET['ID'];
$title = $_GET['title_edit'];
$description = $_GET['description_edit'];

$sql = "UPDATE list SET title = '$title', description = '$description' WHERE ID = '$id'";

if ($conn->query($sql) === TRUE) {
  echo $id . '<br>';
  echo $title . '<br>';
  echo $description . '<br>';
?>
<br>
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
