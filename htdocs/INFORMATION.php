<?php
include 'c1.php';
if(isset($_POST['sub']))
{
	$name=$_POST['nm'];
	$number=$_POST['nu'];
	$location=$_POST['loc'];
	$inform=$_POST['inf'];

    	
			$iq="insert into info(Name,Number,Location,inform) values('$name','$number','$location','$inform')";
			$res=mysqli_query($con,$iq);
			if($res)
			{
?>
    		 	<script>
     			alert("We will Reach you soon");
     			</script>
<?php
	 		}
	 		else
	 		{
?>
	 			<script>
	 			alert("Insertion Failed");
	 			</script>
<?php
	 		}
	 	


	
}
?>
<! Doctype html>
<html>
<head>
<link rel="stylesheet" href="INFORMATION.css">
<title>Sign up</title>
</head>
<body>
	<marquee width="100%" direction="left" height="80px" scrollamount="10"><font size="5">
 All animals deserve a chance to live!</font>
</marquee>
	<div class="help">
	<img src="logo.png"  style="width:128px;height:128px;float:left;opacity:1.5;top:1%;">
	<h1>Report Animal Cruelty</h1>
    </div>
	
	<div  class="signup">
	<h1>INFORMATION</h1>
	<form action="" method="POST">
		<div class="tb">
		<i class="fa fa-user" aria-hidden="true"></i>
		<input type="text" placeholder="Fullname" name="nm">
	    </div>
	    <div class="tb">
		<i class="fa fa-phone" aria-hidden="true"></i>
		<input type="text" placeholder="Number" name="nu">
	    </div>
	    <div class="tb">
		<i class="fa fa-location-arrow" aria-hidden="true"></i>
		<input type='text' placeholder="Location" name="loc">
	    </div>
	    <div class="tb">
	    <i class="fa fa-info" aria-hidden="true"></i>
		<input type="text" placeholder="Inform us" name="inf">
	    </div>
	    <div class="btn">
	    <input type="submit" name="sub" class="btn" value="SUBMIT">
		</div>
	</form>
	<p>Helpline Links :<br><br><a href="https://www.whatshot.in/delhi-ncr/love-animals-volunteer-at-these-shelters-c-5809">Whatshot helpline</a><br><br>
		<a href="https://www.peta.org/about-peta/contact-peta/report-cruelty/">Peta helpline</a><br><br>
		<a href="http://www.animalhelpline.in/searchlocation.php">Animal Helpline</a></p>
	</div>
	
	

</body>
</html>