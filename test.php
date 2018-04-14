<?php 
include 'conn.php'; 

    	$id=$_GET['v'];
      	// print_r($id);


        if(isset($_POST['send'])){
    		$name=$_POST['name'];
    		$email=$_POST['email'];
    		$testid=$_POST['testid'];
    		$phone=$_POST['phone'];
    		$gender=$_POST['gender'];
    		$date=$_POST['datetime'];
    		// $dept_type=$_POST['dept'];
    		 $time_slot=$_POST['slot'];
    	

    		
    		$insert="INSERT INTO booked_test(name,email,lab_id,phone,b_date,slot,gender)VALUES('$name','$email','$testid','$phone','$date','$time_slot','$gender')";
    		$qry=mysqli_query($conn,$insert);
    		if($qry){
           //echo"Appointment confimed.";
           header('Location: ownbookpage.php');
    			}
    			else{
    				 echo"window.alert('Appointment confimation Failed!!')";
    				}
    		
    	}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Medical Appointment Form a Responsive Widget Template :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Medical Appointment Form template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs Sign up Web Templates,
 Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->
<link href="css/wickedpicker.css" rel="stylesheet" type='text/css' media="all" />
<link href="css/stylee.css" rel='stylesheet' type='text/css' />
<!--fonts-->
<link href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
<!--//fonts-->
</head>
<body>
<!--background-->
<h1> Medical Appointment Form </h1>
    <div class="bg-agile">
	<div class="book-appointment">
	<h2>Make an appointment</h2>
			<form action="" method="post">
			<div class="left-agileits-w3layouts same">
			<div class="gaps">
				<p>Patient Name</p>
					<input type="text" name="name" placeholder="" required=""/>
			</div>
				<div class="gaps">
				<p>Phone Number</p>
					<input type="text" name="phone" placeholder="" required=""/>
				</div>
				<div class="gaps">
				<p>Email</p>
						<input type="email" name="email" placeholder="" required="" />
				</div>
				<div class="gaps">
				<p>Test Id</p>
						<input type="text" name="testid" value="<?=$_GET['v'];?>" required="" />
				</div>

				
			</div>
			<div class="right-agileinfo same">
			<div class="gaps">
				<p>Select Date</p>
						<input type="date" id="datepicker1" name="datetime">
			</div>
			<!-- <div class="gaps">
				<p>Department</p>
					<select class="form-control">
						<option></option>
						<option value="Cardiology">Cardiology</option>
						<option value="Ophthalmology">Ophthalmology</option>
						<option value="Neurology">Neurology</option>
						<option value="Psychology">Psychology</option>
						<option value="Dermatology">Dermatology</option>
					</select>
			</div> -->
			<div class="gaps">
				<p>Gender</p>
					<select class="form-control" name="gender">
						<option>Select Gender</option>
						<option value="Male">Male</option>
						<option value="Female">Female</option>
					</select>
			</div>
			<div class="gaps">
				<p>Time</p>
					<input type="text" id="timepicker" name="slot" class="timepicker form-control" value="">
			</div>
			</div>
			<div class="clear"></div>
						  <input type="submit" name="send" value="Make an appointment">
			</form>
		</div>
   </div>
   <!--copyright-->
			<div class="copy w3ls">
		       <p>&copy; 2017. Medical Appointment Form . All Rights Reserved  | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
	        </div>
		<!--//copyright-->
		<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
		<script type="text/javascript" src="js/wickedpicker.js"></script>
			<script type="text/javascript">
				$('.timepicker').wickedpicker({twentyFour: false});
			</script>
		<!-- Calendar -->
				<link rel="stylesheet" href="css/jquery-ui.css" />
				<script src="js/jquery-ui.js"></script>
				  <script>
						  $(function() {
							$( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
						  });
				  </script>
			<!-- //Calendar -->

</body>
</html>
