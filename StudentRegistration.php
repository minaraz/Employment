<?php include 'header.php' ?>
   <div class="container">
      <p>Please enter your information first using the form below.</p>

    <form action="addStudent.php" method="post" class="form-signin">
      <h1 class="form-signin-heading">Create Your Profile</h1>

      <div class="form-label">
        	<label for="Name">Name:</label>
      </div>
        <input type="text" name="Name" class="form-control" pattern="([A-z0-9À-ž\s]){2,20}" required/>

      <div class="form-label">
        	<label for="Education">Education:</label>
	  	</div>
        <input type="text" name="Education" class="form-control" required/>

      <div class="form-label">
        	<label for="University">University:</label>
	  	</div>
        <input type="text" name="University" class="form-control" required/>
      <div class="form-label">
          	<label for="GraduationYear">Graduation Year:</label>
  	  </div>
        <input type="text" name="GraduationYear" class="form-control" required/>
      <div class="form-label">
          	<label for="City">City:</label>
  		</div>
          <input type="text" name="City" class="form-control" required/>
        <br><br>
      <div>
        <button type="submit" class="main-button">Submit</button>
      </div>

      </form>

    </div>

<?php include 'footer.php' ?>
