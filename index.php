<?php include 'header.php';	?>

					<form role="form" action="preview.php" method="POST">
						<div class="form-group">
							<div class="input-group">
							<span class="input-group-addon" id="labelfullname">Fullname</span>
							<input type="text" class="form-control" id="fullname" name="fullname" placeholder="Your Fullname e.g Joe Bloggs" required>
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
							<span class="input-group-addon" id="labelemail">Email address</span>
							<input type="email" class="form-control" id="email" name="email" placeholder="Your Email Address" value="@Newcastle.co.uk" required>
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
							<span class="input-group-addon" id="labeljob">Job Title</span>
							<input type="text" class="form-control" id="job" Name="job" placeholder="Your Job Title" required>
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
							<span class="input-group-addon" id="labelphone">Phone Number</span>
							<input type="text" class="form-control" id="phone" Name="Phone" placeholder="Your extension number only" >
							</div>
						</div>
						<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Preview Email Signature</button>
						<button type="reset" class="btn btn-danger"><span class="glyphicon glyphicon-repeat" aria-hidden="true"></span> Reset Form</button>
					</form>
			
				

<?php include 'footer.php'; ?>