<?php

include 'dbConnection.php';

//Company Query for Related data dropdown
$sql = "SELECT ID, CompanyName FROM Company";
$Company = $conn->query($sql);


//Check if a Position_ID was supplied in the URL Query Parameter
if (isset($_GET['PositionID'])) {

  $PositionID = $_GET['PositionID'];

  //Query DB for details on that Position
  $PositionSQL = "SELECT * FROM Position where ID = $PositionID";

  $Position =  $conn->query($PositionSQL)->fetch_assoc();

}

?>

<?php include 'header.php' ?>
    <div class="container">
      <form action="addPosition.php" method="post" class="form-submit">
        <h2 class="form-submit-heading">Add / Update a Position</h2>
        <?php if(isset($PositionID)) echo "<input type='hidden' name='PositionID' value=" . $PositionID ." >"; ?>
          <div>
              <div class="form-label"><label for="CompanyID">Company:</label></div>
              <select id ="test" name="CompanyID">
                <?php
                if ($Company->num_rows > 0) {
                    // output data of each row
                    while($row = $Company->fetch_assoc()) {
                        echo "<option value='" . $row["ID"] ."'";
                        if (isset($Position) and  $Position['CompanyID'] == $row["ID"]) echo "selected";
                        echo ">" . $row["CompanyName"] . "</option>";
                    }
                }
                ?>
              </select>
          </div>
          <div>
              <div class="form-label"><label for="Title">Title:</label></div>
              <input type="text" name="Title" class="form-control"  required<?php if (isset($Position['Title'])) echo "value='" . $Position['Title'] . "'"; ?> />
          </div>
          <div>
              <div class="form-label"><label for="EducationLevel">EducationLevel:</label></div>
              <input type="text" name="EducationLevel" class="form-control" required<?php if (isset($Position['EducationLevel'])) echo "value='" . $Position['EducationLevel'] . "'"; ?> />
          </div>
          <div>
              <div class="form-label"><label for="Major">Major:</label></div>
              <input type="text" name="Major" class="form-control" required<?php if (isset($Position['Major'])) echo "value='" . $Position['Major'] . "'"; ?> />
          </div>
          <div>
              <div class="form-label"><label for="Sponsor">Sponsor:</label></div>
              <input type="text" name="Sponsor" class="form-control" required<?php if (isset($Position['Sponsor'])) echo "value='" . $Position['Sponsor'] . "'"; ?> />
          </div>
          <div class="button">
              <button type="submit" class="main-button">Submit</button>
          </div>
      </form>
    </div>
<?php include 'footer.php' ?>
