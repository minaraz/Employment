<?php

include 'dbConnection.php';

//Company Query for Related data dropdown
$sql = "SELECT ID, Name FROM Student";
$Student = $conn->query($sql);


//Check if a Student_ID was supplied in the URL Query Parameter
if (isset($_GET['StudentID'])) {

  $StudentID = $_GET['StudentID'];

  //Query DB for details on that Student
  $StudentSQL = "SELECT * FROM Studnet where ID = $StudentID";

  $Student =  $conn->query($StudentSQL)->fetch_assoc();

}

?>

<?php include 'header.php' ?>
    <div class="container">
      <form action="addStudent.php" method="post" class="form-submit">
        <h2 class="form-submit-heading">Add / Update a Student</h2>
        <?php if(isset($StudentID)) echo "<input type='hidden' name='StudnetID' value=" . $StudentID ." >"; ?>
          <div>
              <div class="form-label"><label for="StudentID">Name:</label></div>
              <select id ="test" name="StudentID">
                <?php
                if ($Student->num_rows > 0) {
                    // output data of each row
                    while($row = $Student->fetch_assoc()) {
                        echo "<option value='" . $row["ID"] ."'";
                        if (isset($Student) and  $Name['Name'] == $row["ID"]) echo "selected";
                        echo ">" . $row["Name"] . "</option>";
                    }
                }
                ?>
              </select>
          </div>
          <div>
              <div class="form-label"><label for="Name">Name:</label></div>
              <input type="text" name="Name" class="form-control" pattern="([A-z]){2,20})" required<?php if (isset($Student['Name'])) echo "value='" . $Student['Name'] . "'"; ?> />
          </div>
          <div>
              <div class="form-label"><label for="EducationLevel">EducationLevel:</label></div>
              <input type="text" name="Education" class="form-control" required<?php if (isset($Student['Education'])) echo "value='" . $Student['Education'] . "'"; ?> />
          </div>
          <div>
              <div class="form-label"><label for="University">University:</label></div>
              <input type="text" name="University" class="form-control" required<?php if (isset($Student['University'])) echo "value='" . $Student['University'] . "'"; ?> />
          </div>
          <div>
              <div class="form-label"><label for="GraduationYear">Graduation Year:</label></div>
              <input type="text" name="GraduationYear" class="form-control" required<?php if (isset($Student['GraduationYear'])) echo "value='" . $Student['GraduationYear'] . "'"; ?> />
          </div>
          <div>
              <div class="form-label"><label for="City">City:</label></div>
              <input type="text" name="City" class="form-control" required<?php if (isset($Student['City'])) echo "value='" . $Student['City'] . "'"; ?> />
          </div>
          <div class="button">
              <button type="submit" class="main-button">Submit</button>
          </div>
      </form>
    </div>
<?php include 'footer.php' ?>
