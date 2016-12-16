<?php include 'header.php' ?>
   <div class="container">
      <p>Please enter your company information first using the form below.</p>

      <form action="addCompany.php" method="post" class="form-signin">
        <h1 class="form-signin-heading">Enter Company</h1>

      <div class="form-label">
        	<label for="CompanyName">Name:</label>
      </div>
        <input type="text" name="CompanyName" class="form-control" pattern="([A-z0-9À-ž\s]){2,20}" required/>

      <div class="form-label">
        	<label for="Industry">Industry:</label>
  		</div>
        <input type="text" name="Industry" class="form-control" pattern="[a-zA-Z]+" required/>

      <div class="form-label">
        	<label for="City">City:</label>
		  </div>
        <input type="text" name="City" class="form-control" required/>

        <div class="form-label">
        	<label for="State">State:</label>
	  	</div>
        <input type="text" name="State" class="form-control" required/>
        <br><br>
        <button type="submit" class="main-button">Submit</button>

      </form>

    </div>

<?php include 'footer.php' ?>
