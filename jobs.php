<?php

include 'dbConnection.php';

$sql = "SELECT
  Position.ID as PositionID, Position.Title, Position.EducationLevel, Position.Major, Position.Sponsor,
  Company.CompanyName as CompanyName, Industry, City as City, State
FROM Position JOIN Company ON
Company.ID = Position.CompanyID";
$result = $conn->query($sql);

?>

<?php include 'header.php' ?>
      <div class="container job-listing">
        <div class="inner-container">
        <h1 class="form-signin-heading">Latest Job Posts</h1>

        <?php
        echo "<table id='job-table'>";
        echo "<tr>
              <th>Company</th>
              <th>Title</th>
              <th>Education Level</th>
              <th>Major</th>
              <th>Industry</th>
              <th>Location</th>
              <th>Delete Entry</th>
              <th>Update Entry</th>
            </tr>";
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {

                 echo "<tr>";
                 echo "<td>".$row['CompanyName']."</td>";
                 echo "<td>".$row['Title']."</td>";
                 echo "<td>".$row['EducationLevel']."</td>";
                 echo "<td>".$row['Major']."</td>";
                 echo "<td>".$row['Industry']."</td>";
                 echo "<td>".$row['City']."</td>";
                 echo "<td><a href=deletePosition.php?PositionID=" . $row['PositionID']  ."> Delete</a></td>";
                 echo "<td><a href=PositionForm.php?PositionID=" . $row['PositionID']  ."> Update</a></td>";
                 echo "</tr>";

            }
        }
        echo "</table>";
        ?>

      </div>
    </div>


<?php include 'footer.php' ?>
