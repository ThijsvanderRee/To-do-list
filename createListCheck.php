<?php
    $conn = new mysqli('localhost', 'root', 'mysql', 'to-do-list');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $list_name = $_GET['list_name'];
    $list_name = preg_replace("/[\'\")(;|`,<>]/", "", $list_name);
    $list_name_= str_replace(' ', '_', $list_name);
    // echo $list_name_;
    $sql = "CREATE TABLE `to-do-list`. `$list_name_` (
      `ID` INT NOT NULL AUTO_INCREMENT ,
      `title` VARCHAR(255) CHARACTER SET armscii8 COLLATE armscii8_bin NULL DEFAULT NULL ,
      `description` VARCHAR(255) CHARACTER SET armscii8 COLLATE armscii8_bin NULL DEFAULT NULL ,
      `time_min` INT(255) NULL DEFAULT NULL,
      PRIMARY KEY (`ID`)) ENGINE = InnoDB;"

?>

<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <style media="screen">
    body {
      padding: 20px;
    }
  </style>
</head>
<?php
if ($conn->query($sql) === TRUE) {
?>
<div class="alert alert-success">
  List created!
</div>
<?php } else { ?>
<div class="alert alert-warning">
  Something went wrong, list not created. This list name may be allready in use.
</div>
<?php } ?>
<br>
<a href="index.php" class="btn btn-primary">Home</a>
