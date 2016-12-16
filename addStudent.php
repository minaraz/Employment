<?php
include 'dbConnection.php';

$Name = mysqli_real_escape_string($conn, $_POST['Name']);
$Education = mysqli_real_escape_string($conn,$_POST['Education']);
$University = mysqli_real_escape_string($conn,$_POST['University']);
$GraduationYear = $_POST['GraduationYear'];
$City = mysqli_real_escape_string($conn, $_POST['City']);

$sql = "INSERT INTO Student (Name, Education, University, GraduationYear, City)
VALUES ('$Name', '$Education', '$University', '$GraduationYear', '$City')";




?>

<?php include 'header.php' ?>
<div class="container">
      <?php

        if ($conn->query($sql) === TRUE) {
            echo "<h1>Thank you for registering.</h1>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();

      ?>
      <a href="Student.php" class="main-button center">Student Directory</a>

</div>
<?php include 'footer.php' ?>
