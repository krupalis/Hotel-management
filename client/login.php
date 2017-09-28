<?php

include('head.php');
include('config.php');
error_reporting(0);

if($_SESSION['user_id']!="")
{
?>	
	<script type="text/javascript">
 window.location.href="bookit.php";
 </script>
    <?php
}
else
{
?>
         <link rel="stylesheet" type="text/css" href="css/l_style.css" />
 
<div id="content">
    <div class="wrapper">
      
      <div class="content" style="width:900px">
        <div class="indent">
            
<div id="form_wrapper" class="form_wrapper">
					<form method="post" class="login active">
						<h3>Login</h3>
						<div>
							<label>E-mail:</label>
							<input type="text" name="txt_name" />
							<span class="error">This is an error</span>
						</div>
						<div>
							<label>Password:</label> 
							<input type="password" name="txt_password" />
							<span class="error">This is an error</span>
						</div>
						<div class="bottom">
							
							<input type="submit" value="Login" name="btn_submit"></input>
							<a href="register.php" rel="register" class="linkform">You don't have an account yet? Register here</a>
							<div class="clear"></div>
						</div>
					</form>
									</div>
				<div class="clear"></div>
			</div>

		</div>
</div>
</div>
</div>
</div>

<?php
$count=0;
if(isset($_POST['btn_submit']))
{
	
	$name=$_POST['txt_name'];
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
}

if(isset($_POST['btn_submit']) && $count==0)
{ 

	$select="select * from tbl_user where email='$name' and password='$password'";
	
	$query=mysql_query($select);
$row=mysql_fetch_array($query);


 if($name==$row['email'] && $password==$row['password'])
 {
 
 $_SESSION['user_name']=$row['name'];
 $_SESSION['user_id']=$row['id'];
 $_SESSION['user_pass']=$row['password'];
 ?>
 <script type="text/javascript">
 window.location.href="services.php";
 </script>
<?php
 }
}}
?>

<?php
include('foot.php');
?>