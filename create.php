<?php
  $conn = new mysqli('localhost', 'root', 'mysql', 'to-do-list');
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  $table = $_GET['table'];

  $sql = "SELECT * FROM `$table`";
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
    <input class="form-control" name="title_create" type="text" placeholder="Titel">
  </div>

  <div class="form-group">
    <label for="description_create">Description</label>
    <input class="form-control" name="description_create" type="text" placeholder="Beschrijving">
  </div>

  <div class="form-group">
    <label for="datetime_create">Time in minutes</label>
    <input class="form-control" type="number" name="time_min_create">
  </div>

  <div class="form-group">
    <label for="status_create">Status</label>
    <select class="form-control" name="status_create">
      <option value="to do">To do</option>
      <option value="doing">Doing</option>
      <option value="done">Done</option>
    </select>
  </div>

  <button type="submit" name="create" class="btn btn-success" value="<?php echo $table; ?>">Save</button>
  <a class="btn btn-danger" href="index.php">Cancel</a>
</form>
