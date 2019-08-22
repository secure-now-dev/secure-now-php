<html class="no-js" lang="en">
  <?php include 'components/head.php'; ?>
  <body>
	<?php include 'components/nav.php'; ?>

	<?php include 'components/top-logo.php'; ?>
	
	
	<div class="ui grid container guard">
	  <h1>Enter your guard information</h1>
	  <form class="ui form" action="file-upload.php" method="post" enctype="multipart/form-data">
	    <div class="field">
	      <label>Guard Name</label>
	      <input type="text" placeholder="Guard Name" name="guard_name">
	    </div>
	    <div class="field">
	      <label>Phone Number</label>
	      <input type="number" placeholder="Phone Number" name="phone_number">
	    </div>
	    <div class="field">
	      <label>Contact Email</label>
	      <input type="email" placeholder="example@eaxample.com" name="contact_email">
	    </div>

	    <div class="field">
	      <input name="uploadResume[]" type="file" multiple="multiple"  class="inputfile" id="embedpollfileinput" />
		  <label for="embedpollfileinput" class="ui button">
		    <i class="ui upload icon"></i> 
		    Upload Resume
		  </label>
	    </div>

	    <div class="field">
	      <input name="uploadGuardCard[]" type="file" multiple="multiple"  class="inputfile" id="embedpollfileinput" />
		  <label for="embedpollfileinput" class="ui button">
		    <i class="ui upload icon"></i> 
		    Upload Image of Guard Card
		  </label>
	    </div>

	    <div class="field">
	      <input name="uploadCert[]" type="file" multiple="multiple"  class="inputfile" id="embedpollfileinput" />
		  <label for="embedpollfileinput" class="ui button">
		    <i class="ui upload icon"></i> 
		    Upload Additional Certifications
		  </label>
	    </div>

	    <input class="ui button" tabindex="0" type="submit" value="Submit">
	  </form>
	</div>
	  
	<?php include 'components/footer.php'; ?>
  </body>
</html>