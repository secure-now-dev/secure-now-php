<html class="no-js" lang="en">
  <?php include 'components/head.php'; ?>
  <body>
  	<div class="main-container">
  		<?php include 'components/nav.php'; ?>
		<?php include 'components/top-logo.php'; ?>

		<div class="ui grid container guard">
		  <h1>Enter your guard information</h1>
		  <form class="ui form" id="guardForm" action="file-upload.php" method="post" enctype="multipart/form-data">
		    <div class="field">
		      <label>Guard Name</label>
		      <input type="text" placeholder="John Doe" name="guard_name" class="name" minlength="2" required>
		    </div>
		    <div class="field">
		      <label>Phone Number</label>
		      <input type="text" placeholder="(XXX) XXX-XXXX" name="phone_number" class="phone_us" minlength="9" required>
		    </div>
		    <div class="field">
		      <label>Contact Email</label>
		      <input type="email" placeholder="example@eaxample.com" name="contact_email" required>
		    </div>

		    <div class="imagePreviewStripResume imagePreviewStrip">
		    	
		    </div>

		    <div class="field">
		      <input name="uploadResume[]" type="file" multiple="multiple"  class="inputfile" id="resumeUpload" />
			  <label for="resumeUpload" class="ui button">
			    <i class="ui upload icon"></i> 
			    Upload Resume
			  </label>
		    </div>

		    <div class="imagePreviewStripGuardCard imagePreviewStrip">
		    	
		    </div>

		    <div class="field">
		      <input name="uploadGuardCard[]" type="file" multiple="multiple"  class="inputfile" id="guardCardUpload" />
			  <label for="guardCardUpload" class="ui button">
			    <i class="ui upload icon"></i> 
			    Upload Image of Guard Card
			  </label>
		    </div>

		    <div class="imagePreviewStripCert imagePreviewStrip">
		    	
		    </div>

		    <div class="field">
		      <input name="uploadCert[]" type="file" multiple="multiple"  class="inputfile" id="uploadCert" />
			  <label for="uploadCert" class="ui button">
			    <i class="ui upload icon"></i> 
			    Upload Additional Certifications
			  </label>
		    </div>

		    <input class="ui primary submit button" tabindex="0" type="submit" value="Submit">
		  </form>
		</div>

		<?php include 'components/footer.php'; ?>
  	</div>
  </body>
</html>