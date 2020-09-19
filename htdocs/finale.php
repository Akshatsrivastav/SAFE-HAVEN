<?php
include 'c2.php';
if(isset($_POST['sub']))
{
	$name=$_POST['nm'];
	$state=$_POST['st'];
	$number=$_POST['nu'];
	$animal=$_POST['an'];
	$breed=$_POST['br'];
	$age=$_POST['ag'];
	$medical=$_POST['med'];
	$info=$_POST['inf'];

    	
			$iq="insert into dataent(Name,State,Number,Animal,Breed,Age,Medical,Information) values('$name','$state','$number','$animal','$breed','$age','$medical','$info')";
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
<link rel="stylesheet" href="finale.css">
<title>Adoption</title>
</head>
<body>
	<marquee width="100%" direction="left" height="80px" scrollamount="10"><font size="5">
 All animals deserve a chance to live!</font>
</marquee>
	<div class="help">
	<img src="logo.png"  style="width:128px;height:128px;float:left;opacity:1.5;top:1%;">
	<h1>Adoption</h1>
    </div>
	
	<div  class="signup">
	<h1>INFORMATION</h1>
	<form action="" method="POST">
		<div class="tb">
		<i class="fa fa-user" aria-hidden="true"></i>
		<input type="text" placeholder="Name" name="nm">
	    </div>
		<div class="tb">
		<i class="fa fa-location-arrow" aria-hidden="true"></i>
		<input type="text" placeholder="City" name="st">
	    </div>
	    <div class="tb">
		<i class="fa fa-phone" aria-hidden="true"></i>
		<input type="text" placeholder="Number" name="nu">
	    </div>
	    <div class="tb">
		<i class="fa fa-heart" aria-hidden="true"></i>
		<input type='text' placeholder="Animal" name="an">
	    </div>
	    <div class="tb">
	    <i class="fa fa-heart" aria-hidden="true"></i>
		<input type="text" placeholder="Breed" name="br">
	    </div>
	    <div class="tb">
	    <i class="fa fa-user" aria-hidden="true"></i>
		<input type="text" placeholder="Age" name="ag">
	    </div>
	    <div class="tb">
	    <i class="fa fa-medkit" aria-hidden="true"></i>
		<input type="text" placeholder="Medical" name="med">
	    </div>
	     <div class="tb">
	    <i class="fa fa-info" aria-hidden="true"></i>
		<input type="text" placeholder="Any other info" name="inf">
	    </div>
	    <div class="btn">
	    <input type="submit" name="sub" class="btn" value="SUBMIT">
		</div>
	</form>
	<p>Check the Available Animals</p>
	<!-- <button onclick="window.location.href='database.php'" class="btn button1"> Check Availability</button> -->

	
	</div>
	<div class="fin">
		<form action="database.php" method="get">
    City: <input type="text" name="city"><br>
    <input type="submit">
    </form>
   </div>
	
	

</body>
</html>