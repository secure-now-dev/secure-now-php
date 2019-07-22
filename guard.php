<html class="no-js" lang="en">
  <?php include 'components/head.php'; ?>
  <body>
	<?php include 'components/nav.php'; ?>

	<div class="top-logo">
		<img src="images/securenow.png">	
	</div>
	
	<div class="ui grid container guard">
	  <h1>Enter your guard information</h1>
	  <div class="ui form">
	    <div class="field">
	      <label>Guard Name</label>
	      <input type="text" placeholder="Guard Name">
	    </div>
	    <div class="field">
	      <label>Phone Number</label>
	      <input type="number" placeholder="Phone Number">
	    </div>
	    <div class="field">
	      <label>Contact Email</label>
	      <input type="email" placeholder="example@eaxample.com">
	    </div>

	    <div class="field">
	      <input type="file" (change)="fileEvent($event)" class="inputfile" id="embedpollfileinput" />
		  <label for="embedpollfileinput" class="ui button">
		    <i class="ui upload icon"></i> 
		    Upload Resume
		  </label>
	    </div>

	    <div class="field">
	      <input type="file" (change)="fileEvent($event)" class="inputfile" id="embedpollfileinput" />
		  <label for="embedpollfileinput" class="ui button">
		    <i class="ui upload icon"></i> 
		    Upload Image of Guard Card
		  </label>
	    </div>

	    <div class="field">
	      <input type="file" onchange="text()" class="inputfile" id="embedpollfileinput" />
		  <label for="embedpollfileinput" class="ui button">
		    <i class="ui upload icon"></i> 
		    Upload Additional Certifications
		  </label>
	    </div>

	    <div class="ui button" tabindex="0">Submit</div>
	  </div>
	</div>
	  
	<?php include 'components/footer.php'; ?>
  </body>
</html>