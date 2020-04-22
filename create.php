<?php
    $conn = new mysqli('localhost', 'root', 'mysql', 'to-do-list');
    $conn->set_charset("utf8");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
        $sql = "SELECT * FROM list";
        $result = $conn->query($sql);
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

<form method="get" action="createCheck.php">
    <div class="form-group">
      <label for="title_create">Title</label>
      <input class="form-control" type="text" placeholder="Titel">
    </div>

    <div class="form-group">
      <label for="description_create">Description</label>
      <input class="form-control" type="text" placeholder="Beschrijving">
    </div>

  <button type="submit" name="submit" class="btn btn-success">Save</button>
</form>