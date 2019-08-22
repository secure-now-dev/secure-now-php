<html class="no-js" lang="en">
  <?php include 'components/head.php'; ?>
  <body>
	<?php include 'components/nav.php'; ?>
	<?php include 'components/top-logo.php'; ?>

	<div class="ui grid container guard">
	  <h1>Enter client information</h1>
	  <form class="ui form" action="file-upload.php" method="post" enctype="multipart/form-data">
	    <div class="field">
	      <label>Company Name</label>
	      <input type="text" placeholder="Company Name" name="company_name">
	    </div>
	    <div class="field">
	      <label>Phone Number</label>
	      <input type="number" placeholder="Phone Number" name="phone_number">
	    </div>
	     <div class="field">
	      <label>Contact Name</label>
	      <input type="text" placeholder="example@eaxample.com" name="contact_name">
	    </div>
	    <div class="field">
	      <label>Contact Email</label>
	      <input type="email" placeholder="example@eaxample.com" name="contant_email">
	    </div>

	    <div class="field">
	      <input name="upload[]" type="file" multiple="multiple"  class="inputfile" id="embedpollfileinput" />
		  <label for="embedpollfileinput" class="ui button">
		    <i class="ui upload icon"></i> 
		    Upload Contract
		  </label>
	    </div>

	    <input class="ui button" tabindex="0" type="submit" value="Submit">
	   <!-- <div class="ui button" tabindex="0">Submit</div>-->
	  </form>
	</div>


	<?php include 'components/footer.php'; ?>
  </body>
</html>