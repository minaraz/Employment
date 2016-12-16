<?php

include 'dbConnection.php';

$Title = mysqli_real_escape_string($conn, $_POST['Title']);
$CompanyID = mysqli_real_escape_string($conn, $_POST['CompanyID']);
$EducationLevel = mysqli_real_escape_string($conn, $_POST['EducationLevel']);
$Major = mysqli_real_escape_string($conn, $_POST['Major']);
$Sponsor = mysqli_real_escape_string($conn, $_POST['Sponsor']);

//Check if a beer_ID was provided if so, we're updating a beer, otherwise we're inserting
if (isset($_POST['PositionID']))
{
  $PositionID = $_POST['PositionID'];
  $sql =  "UPDATE Position SET Title='$Title', EducationLevel='$EducationLevel', Major='$Major', Sponsor='$Sponsor'
  WHERE ID = $PositionID";

} else {
  $sql = "INSERT INTO Position (Title, CompanyID, EducationLevel, Major, Sponsor)
  VALUES ('$Title', '$CompanyID', '$EducationLevel', '$Major', '$Sponsor')";
}

?>

<?php include 'header.php' ?>
<div class="container">

      <?php
      if ($conn->query($sql) === TRUE) {
          echo "<h2 class='form-submit-heading''>New record created successfully</h2> <br>";

      } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
      }

      $conn->close();

       ?>
    <a class="main-button" href="jobs.php">Job Posts</a>
    </div>
  <?php include 'footer.php' ?>
