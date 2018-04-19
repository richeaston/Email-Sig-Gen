<?php include 'header.php'; ?>

<?php
$email = $_POST["email"];
$name = $_POST["fullname"];
$job = $_POST["job"];
$phone = $_POST["Phone"];
$school = $_POST["school"];
?>

<div class="alert alert-info" role="alert">
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button>
<U><strong>Welcome</strong> <?php echo $name; ?></U><br/>
Your preview is shown below with the details you have entered.
</div>

<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Signature Preview</h3>
  </div>
  <div class="panel-body">
    
<div class="panel-md-06" id="sig" >

<table class="sigbox" width="620" id="copytext" border="0" cellpadding="4">
<TR>
  
<!-- badge start-->
<TD colspan="2" width="318px" valign="top"><!-- put a logo here --></td>
<!-- badge end -->
</tr>
<tr>
<!--  tagline start -->
<td>
<strong><?php echo $name; ?><BR><?php echo $job; ?></strong>
<BR>Phone Number: <?php echo $phone; ?>
<BR><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
</td>
<td>
<strong>Address blurb</strong>
<BR>Somestreet
<BR>Somewhere
<BR>AB12 3CD
</td>

</tr>
<tr>
<!-- school tagline end -->

<!-- footer start -->
<TD colspan='2'></td>
<!-- footer end -->

</tr>
</table>
</div>



  </div>
</div>


<div class="panel-group sigbox" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-danger">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Instructions
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body" >
        	<p>Using the mouse, select the signature in the preview box, then press <code><kbd><kbd>Ctrl</kbd> + <kbd>C</kbd></kbd></code> to copy the signature to the clipboard.</p>
			<br/>
			<p>Now open you're Email, and click the  <kbd><span class="glyphicon glyphicon-cog" aria-hidden="true"></span></kbd> button, then select the "settings" menu option.</p>
			<br/>
			<p>Scroll down until you find the signature box.</p>
			<br/>
			<p>Click the mouse in the signature box and press <code><kbd><kbd>Ctrl</kbd> + <kbd>V</kbd></kbd></code> to paste the signature into the box.</p>
			<BR/>
			<p>Then click the "Save" button at the bottom of the page, your signature is now saved.</p>
		
      </div>
    </div>
  </div>
</div>
<br/>
<button class="btn btn-warning" onclick="history.go(-1);"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit Signature</button>

<!--<a href="index.php" class="btn btn-danger"><span class="glyphicon glyphicon-repeat" aria-hidden="true"></span> Restart Signature Generation</a>-->
<br/>
<br/>
  
<?php include 'footer.php'; ?>