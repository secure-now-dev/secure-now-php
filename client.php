<html class="no-js" lang="en">
  <?php include 'components/head.php'; ?>
  <body>
	<?php include 'components/nav.php'; ?>
	<?php include 'components/top-logo.php'; ?>

	<div class="ui grid container guard">
	  <h1>Enter client information</h1>
	  <div class="ui form">
	    <div class="field">
	      <label>Company Name</label>
	      <input type="text" placeholder="Company Name">
	    </div>
	    <div class="field">
	      <label>Phone Number</label>
	      <input type="number" placeholder="Phone Number">
	    </div>
	     <div class="field">
	      <label>Contact Name</label>
	      <input type="text" placeholder="example@eaxample.com">
	    </div>
	    <div class="field">
	      <label>Contact Email</label>
	      <input type="email" placeholder="example@eaxample.com">
	    </div>

	    <div class="field">
	      <input type="file" (change)="fileEvent($event)" class="inputfile" id="embedpollfileinput" />
		  <label for="embedpollfileinput" class="ui button">
		    <i class="ui upload icon"></i> 
		    Upload Contract
		  </label>
	    </div>

	    <div class="ui button" tabindex="0">Submit</div>
	  </div>
	</div>


	<?php include 'components/footer.php'; ?>
  </body>
</html>