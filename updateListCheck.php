<?php
    $conn = new mysqli('localhost', 'root', 'mysql', 'to-do-list');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

$table = $_GET['edit'];
$new_name = $_GET['new_name'];
echo $table;
echo $new_name;
// $sql = "RENAME TABLE `$table` TO `$new_name`";
$sql = "RENAME TABLE '$table' TO '$new_name'";

if ($conn->query($sql) === TRUE) {
?>
    Your changes are saved!
    <br>
    <a href="index.php">Home</a>
<?php
} else {
  ?>
  Something went wrong
  <br>
<a href="index.php">Home</a>
  <?php
}
?>
