<html>
<head>
<title>Admin Panel</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
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


</head>

<body>


<body>
<!--main div start-->
<div class="main">


<!--header div start-->
<div class="header">


<!--head1 div start-->
<div class="head1">
<br>
<center>
<font size="+2" color="#FFFFFF">
Admin Panel
</font>
</center>
</div>
<!--head1 div end-->


<!--head2 div start-->
<div class="head2">
<br><center>
<font size="+2" color="#FFFFFF" >
City Entertainment Hub (Resort and Restaurants)
</font>
</center>

</div>
<!--head2 div end-->

</div>
<!--header div end-->


<!--contain div start-->
<div class="contain">

<!--table div start-->
<div class="table">
<form method="POST">
<table cellspacing="5px" align="center" border="0" width="360px" height="200px">

<tr>
<td width="100px"><font size="+2">&nbsp;&nbsp;E-mail</font></td>
<td><input type="text" value="<?php echo $name; ?>" name="txt_email" class="textbox" /></td>
<td><?php echo $n1; ?></td>
</tr>


<tr><td><font size="+2">&nbsp;&nbsp;Password</font></td>
<td><input type="password" name="txt_password" class="textbox" /></td>
<td><?php echo $n2; ?></td>
</tr>

<tr><td colspan="3">
<center>
<input type="submit" class="btn" value="Login" name="btn_submit" />

&nbsp;

<input type="reset" class="btn" value="Clear" name="btn_clear" />
</center></td></tr>



</table>

</form>
</div>
<!--table div end-->



</div>
<!--contain div end-->


</body>
</html>