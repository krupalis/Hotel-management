<?php
include('head.php');
?>
         <link rel="stylesheet" type="text/css" href="css/l_style.css" />
<script language="javascript">
function user()
{
	if(document.frm.name.value=="")
	{
		alert("Enter name")
		document.frm.name.focus();
		return false;
	}
	
	if(document.frm.email.value.indexOf('@',0)==-1 || document.frm.email.value.indexOf('.',0)==-1)
	{
	alert("Email field requires an \"@\" and \".\". \n  please  enter  valid  email id..");
		document.form.email.focus();
		return false;
	}
	
	if(document.frm.unm.value=="")
	{
		alert("Enter username")
		document.frm.unm.focus();
		return false;
	}
	
	if(document.frm.password.value=="")
	{
		alert("Enter proper password")
		document.frm.password.focus();
		return false;
	}
	
	if(document.frm.c_password.value=="")
	{
		alert("Enter proper password")
		document.frm.c_password.focus();
		return false;
	}
	
	if(document.frm.city.value=="")
	{
		alert("Enter city name")
		document.frm.city.focus();
		return false;
	}
	
	if(document.frm.mobile.value=="")
	{
		alert("Enter contact no.")
		document.frm.mobile.focus();
		return false;
	}
}





</script>


<?php
$count=0;
if(isset($_REQUEST["in"]))
{
	$name=$_REQUEST['name'];
	if($name=="")
	{
	echo "<script>alert('Enter Name');</script>";
	$count++;	
	}
	
	$email=$_REQUEST['email'];
	if($email=="")
	{
	echo "<script>alert('Enter email');</script>";
	$count++;
	}
	
	$username=$_REQUEST['unm'];
	if($username=="")
	{
	echo "<script>alert('Enter username');</script>";
	$count++;
	}
	
	$password=$_REQUEST['password'];
	if($password=="")
	{
	echo "<script>alert('Enter password');</script>";
	$count++;
	}
	
	$c_password=$_REQUEST['c_password'];
	if($c_password=="")
	{
	echo "<script>alert('Enter password');</script>";
	$count++;
	}
	
	$city=$_REQUEST['city'];
	if($city=="")
	{
	echo "<script>alert('Enter city');</script>";
	$count++;
	}
	
	$mobile=$_REQUEST['mobile'];
	if($mobile=="")
	{
	echo "<script>alert('Enter contact');</script>";
	$count++;
	}
}

if(isset($_REQUEST['in']) && $count==0)
{ 
	
	
	$b=$_REQUEST["name"];
	$c=$_REQUEST["email"];
	$d=$_REQUEST["unm"];
	$e=$_REQUEST["password"];
	$f=$_REQUEST["c_password"];
	$g=$_REQUEST["city"];
	$i=$_REQUEST["mobile"];
	//$j=$_REQUEST["status"];
	
	

		$file=$_FILES['photo']['name'];
		$dest="../admin/img/$file";
		$src=$_FILES['photo']['tmp_name'];
		move_uploaded_file($src,$dest);
	


	mysql_connect("localhost","root","");
	mysql_select_db("restaurant");
	mysql_query("insert into tbl_user values ('','$b','$c','$d','$e','$f','$g','$i','$dest','1')");


mysql_close();
	
	
	
}
?>	


		 
		 
 
<div id="content">
    <div class="wrapper">
      
      <div class="content">
        <div class="indent">
			 <div id="form_wrapper" class="form_wrapper">
					<form class="register active" name="frm" method="post" onSubmit="return user()" enctype="multipart/form-data">
						<h3>Register</h3>
						
							<div>
								<label>Name:</label>
								<input type="text" name="name" />
								<span class="error">this is an error</span>
							</div>
							<div>
															<div>
								<label>Email:</label>
								<input type="text" name="email"/>
								<span class="error">This is an error</span>
							</div>
							<div>
								<label>Username:</label>
								<input type="text" name="unm"/>
								<span class="error">This is an error</span>
							</div>
							<div>
								<label>Password:</label>
								<input type="password" name="password" />
								<span class="error">This is an error</span>
							</div>
							<div>
 								<label>Confirm Password: </label>
								<input type="password" name="c_password" />
								<span class="error">This is an error</span>
							</div>
							
							<div>
								<label>City:</label>
								<input type="text" name="city" />
								<span class="error">This is an error</span>
							</div>
							
							<div>
								<label>Contact No.:</label>
								<input type="text" name="mobile" maxlength="10"/>
								<span class="error">This is an error</span>
							</div>
							
							<div>
								<label>Photo:</label>
								&nbsp;&nbsp;&nbsp;&nbsp;<input type="file" name="photo" />
								<span class="error">This is an error</span>
							</div>
							
						
						<div class="bottom">
							<div class="remember">
							</div>
							<input type="submit" value="Register" name="in"  />
							<a href="login.php" rel="login" class="linkform">You have an account already? Log in here</a>
							<div class="clear"></div>
						</div></div></div>
					</form>
				



</div>
</div>
</div>
</div>

<?php
include('foot.php');
?>