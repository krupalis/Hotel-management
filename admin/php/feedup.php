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
	header("Location:feedview.php");
	exit;
}
if(isset($_REQUEST['btn1']))
{
	$k=$_REQUEST['id'];
	$a=$_REQUEST["username"];
	$b=$_REQUEST["useremail"];
	$c=$_REQUEST["usermsg"];	
	mysql_connect("localhost","root","");
	mysql_select_db("restaurant");
	mysql_query("update tbl_feedback set username='$a',useremail='$b',usermsg='$c' where id='$k'");
	

	header("Location:feedview.php");
	exit;
}

mysql_connect("localhost","root","");
mysql_select_db("restaurant");
$t=mysql_query("select * from tbl_feedback where id=".$_REQUEST['x']);
$r=mysql_fetch_row($t);
*/
?>


<div class="contain">
<form name="form" method="post"  enctype="multipart/form-data" >
<table width="500px" height="200px" align="center" cellspacing="15px">
<tr>
<th colspan="3">
<font size="+2" color="#0033FF">
Update Feedback
</font>
</th>
</tr>

<tr>
<td width="120px"><font size="3"><b>ID</b></font></td>
<td><input type="text" name="id" class="textbox" value='<?php echo $r[0]; ?>' readonly/></td>
</tr>


<tr>
<td width="120px"><font size="3"><b>Name</b></font></td>
<td><input type="text" name="username" class="textbox" value='<?php echo $r[1]; ?>'/></td>
</tr>

<tr>
<td width="120px"><font size="3"><b>E-mail</b></font></td>
<td><input type="text" name="useremail" class="textbox" value='<?php echo $r[2]; ?>'/></td>

</tr>


<tr>
<td><b>Comment</b></td><td> <textarea col="20" rows="3" size="20" name="usermsg" value='<?php echo $r[3]; ?>' style="resize:none;"></textarea></td>
</td>
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

