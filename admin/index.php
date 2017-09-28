
<!DOCTYPE html>
<html>
<?php
session_start();
include("php/config.php");
error_reporting(0);

$count=0;
if(isset($_POST['btn_submit']))
{
	
	$name=$_POST['txt_email'];
	if($name=="")
	{
	$n1="*";
	$count++;	
	}
	$password=$_POST['txt_password'];
	if($password=="")
	{$n2="*";
	$count++;
	}


if($count==0)
{ 

	$select="select * from tbl_admin where txt_email='$name' and txt_password='$password'";
	
	$query=mysql_query($select);
    $row=mysql_fetch_array($query);


 if($name==$row['txt_email'] && $password==$row['txt_password'])
 {
 
 $_SESSION['ad_name']=$row['txt_name'];
 $_SESSION['ad_email']=$row['txt_email'];
 $_SESSION['ad_id']=$row['id'];
 $_SESSION['ad_pass']=$row['txt_password'];
 
 ?>
 <script type="text/javascript">
 window.location.href="php/index.php";
 </script>
<?php
 }}
}
?>

	
<head>
	<title>Admin Panel</title>
		<meta charset="utf-8">
		<link href="css/stylelogin.css" rel='stylesheet' type='text/css' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!--webfonts-->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,300,600,700' rel='stylesheet' type='text/css'>
		<!--//webfonts-->
</head>
<body>
	
				 <!-----start-main---->
				<div class="login-form">
					<div class="head">
						<!---<img src="images/login.jpg" alt=""/>-->
						
					</div>
				<form method="post">
					<li>
						<input type="text" class="text" value="Email Id" name="txt_email" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'USERNAME';}" ><a href="#" class=" icon user"></a>
					</li>
					<li>
						<input type="password" value="Password"name="txt_password" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Password';}"><a href="#" class=" icon lock"></a>
					</li>
					<div class="p-container">
								<label class="checkbox"><input type="checkbox" name="checkbox" checked><i></i>Remember Me</label>
								<input type="submit"  name="btn_submit" value="SIGN IN" >
							<div class="clear"> </div>
					</div>
				</form>
			</div>
			<!--//End-login-form-->
		  <!-----start-copyright---->
   					<div class="copy-right">
						<p><h2><font color="red">Developed By :Krupali Sakariya</font></h2> </p> 
					</div>
				<!-----//end-copyright---->
		 		
</body>
</html>