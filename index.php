<?php
    $conn = new mysqli('localhost', 'root', 'mysql', 'to-do-list');
    $conn->set_charset("utf8");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
        $tables = array();
        $sql = "SHOW TABLES";
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
    .list-group-item:nth-child(even){
      background-color:#eee;
    }
    .card {
      display: inline-flex;
    }
  </style>
</head>

<body>
  <a href="createList.php" class="btn btn-primary" style="float: right;">Create new list</a>
  <?php
    while ($row = mysqli_fetch_row($result)) {
        $tables[] = $row[0];
    }

  $data = array();
  foreach($tables as $table){
      $query = "select * from `$table`";
      $res = mysqli_query($conn,$query);
      $table_ = str_replace('_', ' ', $table);
      ?>
      <div class="card" style="width: 18rem;">
        <div class="card-header">
          <h2><?php echo $table_; ?></h2>
          <a href="deleteList.php?table=<?php echo $table;?>" class="btn btn-danger">Delete list</a>
          <a href="updateList.php?table=<?php echo $table;?>" class="btn btn-success">Edit list</a>
          <hr>
          <a href="create.php?table=<?php echo $table;?>" class="btn btn-primary">Create new item</a>
        </div>
        <ul class="list-group list-group-flush">
          <?php while($row = $res->fetch_assoc()) { ?>
            <div class="list-group-item">
              <h4> <?php echo $row['title'];?></h4>
              <p> <?php echo $row['description']?></p>
              <p> <?php echo $row['time_min'] ?></p>
              <a class="btn btn-danger" href="delete.php?ID=<?php echo($row["ID"]);?>&table=<?php echo $table ?>">Delete</a>
              <a class="btn btn-success" href="update.php?ID=<?php echo($row["ID"]);?>&title=<?php echo($row['title']);?>&description=<?php echo($row['description']);?>&time_min=<?php echo ($row['time_min']); ?>&table=<?php echo $table ?>">Edit</a>
            </div>
          <?php } ?>
        </ul>
      </div>
      <?php
  }

   ?>
</body>
