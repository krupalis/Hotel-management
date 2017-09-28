<?php /*?><?php
include("header.php");

session_start();
?>
<?php */?>
<?php
include("header.php");
include("welcome.php");
include("menu.php");
session_start();
?>


<?php
/*
if(isset($_REQUEST['btn2']))
{
	header("Location:user_view.php");
	exit;
}
if(isset($_REQUEST['btn1']))
{
	$k=$_REQUEST['id'];
	$b=$_REQUEST["name"];
	$c=$_REQUEST["email"];
	$d=$_REQUEST["password"];
	$e=$_REQUEST["age"];
	$f=$_REQUEST["sex"];
	$g=$_REQUEST["address"];
	$i=$_REQUEST["mobile"];
	
	if(on=="sex")
	{
		$d="Male";
	}
	else
	{
		$d="Female";
	}

	
	$file=$_FILES['photo']['name'];
		$dest="../user/images/$file";
		$src=$_FILES['photo']['tmp_name'];
		move_uploaded_file($src,$dest);
	
	
	
	mysql_connect("localhost","root","");
	mysql_select_db("restaurant");
	mysql_query("update tbl_user set name='$b',address='$g',email='$c',password='$d',age='$e',sex='$f',mobile='$i',photo='$dest' where id='$k'");
	

	header("Location:user_view.php");
	exit;
}

mysql_connect("localhost","root","");
mysql_select_db("restaurant");
$t=mysql_query("select * from tbl_user where id=".$_REQUEST['x']);
$r=mysql_fetch_row($t);
*/
?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/style.css">

</head>
<body>
<div class="contain">
<form name="form" method="post"  enctype="multipart/form-data" >
<table width="500px" height="200px" align="center"  cellspacing="10px">
<tr>
<th colspan="3">
<font size="+2" color="#0033FF">
Update user Info
</font>
</th>
</tr>

<tr>
<td width="120px"><font size="4">ID</font></td>
<td><input type="text" name="id" class="textbox" value='<?php echo $r[0]; ?>' readonly/></td>
</tr>


<tr>
<td width="120px"><font size="4">Name</font></td>
<td><input type="text" name="name" class="textbox" value='<?php echo $r[1]; ?>'/></td>
</tr>

<tr>
<td width="120px"><font size="4">E-mail</font></td>
<td><input type="text" name="email" class="textbox" value='<?php echo $r[2]; ?>'/></td>

</tr>

<tr>
<td width="120px"><font size="4">Password</font></td>
<td><input type="text" name="password" class="textbox" value='<?php echo $r[3]; ?>'/></td>

</tr>

<tr>
<td width="120px"><font size="4">Age</font></td>
<td><input type="text" name="age" class="textbox" value='<?php echo $r[4]; ?>'/></td>

</tr>

<tr><td><font color='#000000'><b>Gender</b></font></td><td><input type='radio' name='sex' value='<?php echo $r[5]; ?>'/><font color='#000000'><b>Male</b> </font><input type='radio' name='sex1' value='<?php echo $r[5]; ?>' /><font color='#000000'><b>Female</b>
</font></td></tr>

</tr>

<tr>
<td><b>Address</b></td><td> <textarea col="20" rows="3" size="20" name="address" value='<?php echo $r[6]; ?>' style="resize:none;"></textarea></td>
</td>
</tr>

<tr>
<td width="120px"><font size="4">Contact No</font></td>
<td><input type="text" name="mobile" class="textbox" value='<?php echo $r[8]; ?>'/></td>

</tr>

<tr>
<td width="120px"><font size="4">photo</font></td>
<td><input type="file" name="photo" class="textbox" value='<?php echo $r[7]; ?>'/></td>

</tr>

<tr>
<td colspan="2">
<center>
<input type="submit" name="btn1" value="Update" class="btn">
&nbsp;
<!--<button name="btn2">Back</button>-->
<input type="submit" name="btn2" value="Back" class="btn">
</center>
</td>
</tr>
</table>
</form>

</div>
<?php

include("footer.php");
?>
