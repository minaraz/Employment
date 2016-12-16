<?php
include 'dbConnection.php';

?>

<?php include 'header.php' ?>
      <div class="container job-listing">
        <div class="inner-container">
        <h1 class="form-signin-heading">Student's Directory</h1>

        <?php

        $sql = "SELECT * FROM Student";
        $result = $conn->query($sql);
        echo "<table id='student-table'>";
        echo "<tr>
              <th>Name</th>
              <th>Education</th>
              <th>University</th>
              <th>Graduation Year</th>
              <th>City</th>
            </tr>";
          if ($result)
          {
         while($row = $result->fetch_assoc()) {

                 echo "<tr>";
                 echo "<td>".$row['Name']."</td>";
                 echo "<td>".$row['Education']."</td>";
                 echo "<td>".$row['University']."</td>";
                 echo "<td>".$row['GraduationYear']."</td>";
                 echo "<td>".$row['City']."</td>";
                 echo "</tr>";
                 }
               }

                 echo "</table>";
                 ?>

      </div>
    </div>

<?php include 'footer.php' ?>
