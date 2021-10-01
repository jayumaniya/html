 <?php
include("server.php");
include("db.php");

$sql="select id,name from country";
$stmt=$con->prepare($sql);
$stmt->execute();
$arrCountry=$stmt->fetchAll(PDO::FETCH_ASSOC);

 ?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>RegistrationForm_v1 by Colorlib</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
<!-- Bootstrap 4 CDN -->
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> -->
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="jquery-3.5.1.min.js"></script>
		<script>
		$(document).ready(function(){
		jQuery('#country').change(function(){
			var id=jQuery(this).val();
			if(id=='-1'){
				jQuery('#state').html('<option value="-1">Select State</option>');
			}else{
				$("#divLoading").addClass('show');
				jQuery('#state').html('<option value="-1">Select State</option>');
				jQuery('#city').html('<option value="-1">Select City</option>');
				jQuery.ajax({
					type:'post',
					url:'get_data.php',
					data:'id='+id+'&type=state',
					success:function(result){
						$("#divLoading").removeClass('show');
						jQuery('#state').append(result);
					}
				});
			}
		});
		jQuery('#state').change(function(){
			var id=jQuery(this).val();
			if(id=='-1'){
				jQuery('#city').html('<option value="-1">Select City</option>');
			}else{
				$("#divLoading").addClass('show');
				jQuery('#city').html('<option value="-1">Select City</option>');
				jQuery.ajax({
					type:'post',
					url:'get_data.php',
					data:'id='+id+'&type=city',
					success:function(result){
						$("#divLoading").removeClass('show');
						jQuery('#city').append(result);
					}
				});
			}
		});
	});

	</script>
	</head>

	<body>

		<div class="wrapper" style="background-image: url('images/bg-1.jpg');">
			<div class="inner">
				<div class="image-holder">
					<img src="images/banner.jpg" alt="">
				</div>
				<form action="" method="POST">
					<h3>Registration Form</h3>
					
					<div class="form-group">
						<input type="text" name="firstname" placeholder="First Name" class="form-control" required="" >
						<input type="text" name="lastname" placeholder="Last Name" class="form-control" required="" >
					</div>
									<!-- <div class="form-wrapper">
						<input type="text" placeholder="Username" class="form-control">
						<i class="zmdi zmdi-account"></i>
					</div> -->
					<div class="form-wrapper">
						<input type="email" name="email" placeholder="Email Address" class="form-control" required="" >
						<i class="zmdi zmdi-email"></i>
					</div>
					 <div class="form-wrapper">
						<select name="gender" id="" class="form-control">
							<option value="" name="gender"disabled selected>Gender</option>
							<option name="gender" value="male">Male</option>
							<option name="gender" value="female">Female</option>
							<option name="gender" value="other">Other</option>
						</select>
						<i class="zmdi zmdi-caret-down" style="font-size: 17px"></i>						
					</div> 
						<input type="date" name="date" placeholder="Date" class="form-control" required="" >
						<i class="zmdi zmdi-date"></i> 
					<div class="form-wrapper">
						<input type="text" name="mobile"  maxlength="10" placeholder="Mobile No" class="form-control" required="" >
						<i class="zmdi zmdi-phone"></i>
					</div>
					<div class="form-wrapper">
						<textarea type="textarea" class="form-control" rows="3" cols="3" name="address"
						placeholder="Enter Your Address" required></textarea>
					</div>
					<div class="form-wrapper">
						<select name="country" id="country" class="form-control">
							<option value="-1" name="country">Country</option>					
							<?php
							foreach($arrCountry as $country){
								?>
								<option value="<?php echo $country['id']?>"><?php echo $country['name']?></option>
								<?php
							}
							?>
						</select>
						<i class="zmdi zmdi-caret-down" style="font-size: 17px"></i>							
					</div>
					<div class="form-wrapper">
						<select name="state" id="state" class="form-control">
							<option  value="" name="state">State</option>							
						</select>
						<i class="zmdi zmdi-caret-down" style="font-size: 17px"></i>							
					</div>
					<div class="form-wrapper">
						<select name="city" id="city" class="form-control">
							<option  value="" name="city">City</option>
													
						</select>
						<i class="zmdi zmdi-caret-down" style="font-size: 17px"></i>							
					</div>
					<div class="form-wrapper">
						<input type="text" maxlength="6" name="pincode"  maxlength="10" placeholder="PinCode" class="form-control" required="" >
						<i class="zmdi zmdi-pin"></i>
					</div>
						<div class="form-group">
						<input type="password" name="password" placeholder="Password" class="form-control" required="" >						
						<input type="password" name="password2" placeholder="Confirm Password" class="form-control" required="" >					
					</div>
					 <div class="form-wrapper">
					<label><b>Profile Picture:</b></label> 
					<input type="file" class="" name="picture" required>
				</div> 
					
					<button name="btn_reg">Register 
						<i class="zmdi zmdi-arrow-right"></i>
					</button>
				</form>
			</div>
		</div>

	</body>
	
</html>
