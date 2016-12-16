<?php

include 'dbConnection.php';

$PositionID = $_GET['PositionID'];

$sql = "DELETE FROM Position WHERE ID=$PositionID";

$result = $conn->query($sql);

?>
<?php include 'header.php' ?>
<div class="container">

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Delete Position</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrapDist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="styles/style.css" rel="stylesheet">

  </head>

  <body>
    <div class="container">

    <?php

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $conn->close();
    ?>
    <div>
    <a class="main-button" href="jobs.php">Back</a>
    </div>
    </div>
  </div>
  <?php include 'footer.php' ?>

  </body>
</html>
