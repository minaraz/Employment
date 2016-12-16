<?php
include 'dbConnection.php';

//print_r($conn);

$CompanyName = mysqli_real_escape_string($conn, $_POST['CompanyName']);
$Industry = mysqli_real_escape_string($conn, $_POST['Industry']);
$City = mysqli_real_escape_string($conn, $_POST['City']);
$State = mysqli_real_escape_string($conn, $_POST['State']);
$sql = "INSERT INTO Company (CompanyName, Industry, City, State)
VALUES ('$CompanyName', '$Industry', '$City', '$State')";



?>

<?php include 'header.php' ?>
<div class="container">
      <?php

        if ($conn->query($sql) === TRUE) {
            echo "<h1>Thank you for registering your company.</h1> <br><br>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();

      ?>
      <a href="PositionForm.php" class="main-button center">Post a Job</a>

</div>
<?php include 'footer.php' ?>
