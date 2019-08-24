<html class="no-js" lang="en">
  <?php include 'components/head.php'; ?>
  <body>
  	<div class="main-container"> 
  		<?php include 'components/nav.php'; ?>
		<?php include 'components/top-logo.php'; ?>

		<div class="ui grid container guard">
		  <h1>Enter client information</h1>
		  <form class="ui form" id="clientForm" action="file-upload.php" method="post" enctype="multipart/form-data">
		    <div class="field">
		      <label>Company Name</label>
		      <input type="text" placeholder="Company Name" name="company_name" minlength="2" required>
		    </div>
		    <div class="field">
		      <label>Phone Number</label>
		      <input type="text" placeholder="(XXX) XXX-XXXX" name="phone_number" class="phone_us" minlength="9" required>
		    </div>
		     <div class="field">
		      <label>Contact Name</label>
		      <input type="text" placeholder="John Doe" name="contact_name" minlength="2" required>
		    </div>
		    <div class="field">
		      <label>Contact Email</label>
		      <input type="email" placeholder="example@eaxample.com" name="contant_email" minlength="2" required>
		    </div>

		    <div class="imagePreviewContractUpload imagePreviewStrip">
		    	
		    </div>

		    <div class="field">
		      <input name="contactUpload[]" type="file" multiple="multiple"  class="inputfile" id="contactUpload" />
			  <label for="contactUpload" class="ui button">
			    <i class="ui upload icon"></i> 
			    Upload Contract
			  </label>
		    </div>

		    <input class="ui primary submit button" tabindex="0" type="submit" value="Submit">
		   <!-- <div class="ui button" tabindex="0">Submit</div>-->
		  </form>
		</div>

		<?php include 'components/footer.php'; ?>
  	</div>
  </body>
</html>