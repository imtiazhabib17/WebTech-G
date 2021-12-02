

<!-- FORM VALIDATION -->

<?php 
include("includes/db.php");
	$email="";
	$password="";
	// $msg='';
?>

<!-- form validation -->
<?php 

if(isset($_POST['login']))
	{
		$status=9;
		$email=$_POST['email'];

		if($email == "")
		{
			$error_msg1['email'] = "Email is required";
			$status=0; 
		}
		elseif(!filter_var($email,FILTER_VALIDATE_EMAIL))
	  	{
	  	       $error_msg1['email'] = "Invalid email address!"; 
	  	       $status=0; 
	  	}
	  	$password=$_POST['pass'];
		if($password== "")
		{
			$error_msg2['pass'] = "Password is required";
			$status=0; 
		}elseif($status!=0){
			$status = 5;

		}
    if($status== 5 )
	{
	
		$c_email = $_POST['email'];
		$c_pass = $_POST['pass'];
		
		$sel_c = "select * from customers where customer_pass='$c_pass' AND customer_email='$c_email'";
		
		$run_c = mysqli_query($con, $sel_c);
		
		$check_customer = mysqli_num_rows($run_c); 
		if($check_customer==0){
		
		  $msg= "Password or email is incorrect, plz try again!'";
		}
		if($check_customer>0 ){
		
			$_SESSION['customer_email']=$c_email; 
			
			echo "<script>alert('You logged in successfully, Thanks!')</script>";
			
		}
		
	}
	}


?>




<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <style >
		.error
		{
			color: #cc0000;
			padding-top: 2px;
			width: 100%;
		}
	</style>
</head>
<body>
<div> 
	
	<form method="post" action="customer_login.php"> 
		
		<table width="500" align="center" bgcolor="skyblue"> 
			
			<tr align="center">
				<td colspan="3"><h2>Login or Register to Buy!</h2></td>
			</tr>
			
			<tr>
				<td align="right"><b>Email:</b></td>
				<td>
					<input type="text" name="email" placeholder="enter email" value="<?php echo $email;?>"/>
				</td>
			
				
			</tr>

			<tr>
				<td align="right"><b></b></td>
				<td >
					<?php 
					  if(isset($error_msg1['email']))
					  {
					  	echo "<div class='error'>".$error_msg1['email']."</div>";
					  }
					?>
				</td>
				
			</tr>
			
			<tr>
				<td align="right"><b>Password:</b></td>
				<td><input type="password" name="pass" placeholder="enter password" value="<?php echo $password;?>"/></td>
			</tr>

			<tr>
				<td align="right"><b></b></td>
				<td >
					<?php 
					  if(isset($error_msg2['pass']))
					  {
					  	echo "<div class='error'>".$error_msg2['pass']."</div>";
					  }
					?>
					<?php 
					  if(isset($msg))
					  {
					  	echo "<div class='error'>".$msg."</div>";
					  }
					?>
				</td>
				
			</tr>
		
			
			<tr align="center">
				<td colspan="3"><input type="submit" name="login" value="Login" /></td>
			</tr>		
		
		</table> 
	
	</form>
	
	
<?php 
	// if($status==1)
	// {
	
	// 	$c_email = $_POST['email'];
	// 	$c_pass = $_POST['pass'];
		
	// 	$sel_c = "select * from customers where customer_pass='$c_pass' AND customer_email='$c_email'";
		
	// 	$run_c = mysqli_query($con, $sel_c);
		
	// 	$check_customer = mysqli_num_rows($run_c); 
		
	// 	if($check_customer==0){
		
	// 	  $msg= "Password or email is incorrect, plz try again!'";
	// 	  exit();
	// 	}
	// 	if($check_customer>0 ){
		
	// 		$_SESSION['customer_email']=$c_email; 
			
	// 		echo "<script>alert('You logged in successfully, Thanks!')</script>";
			
	// 	}
		
	// }
	
	
	?>
	
	
	

</div>


</body>
</html>


