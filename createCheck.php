<?php
  $conn = new mysqli('localhost', 'root', 'mysql', 'to-do-list');
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

$title = $_GET['title_create'];
$description = $_GET['description_create'];
$time_min = $_GET['time_min_create'];
$status = $_GET['status_create'];
$table = $_GET['create'];
$title = htmlspecialchars($title);
$description = htmlspecialchars($description);
$time_min = htmlspecialchars($time_min);

$sql = "INSERT INTO `$table`(title, description, time_min, status) VALUES ('$title', '$description', '$time_min', '$status')";
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
    .list-group-item:nth-child(even){
      background-color:#eee;
    }
  </style>
</head>
<?php if ($conn->query($sql) === TRUE) { ?>
<div class="alert alert-success">
  Item created!
</div>
<?php } else { ?>
<div class="alert alert-warning">
  Something went wrong, item not created.
</div>
<?php } ?>
<br>
<a href="index.php" class="btn btn-primary">Home</a>
