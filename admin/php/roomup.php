<?php /*?><?php
include("header.php");

session_start();
?>
<?php */?>
<?php
session_start();
include("header.php");
include("welcome.php");
include("menu.php");

?>



<?php
/*if(isset($_REQUEST['btn2']))
{
	header("Location:roomview.php?pageid=1");
	exit;
}
if(isset($_REQUEST['btn1']))
{
	//echo 'come';die();
	$k=$_REQUEST['id'];
	$a=$_REQUEST['room_nm'];
	$b=$_REQUEST['room_des'];
	$c=$_REQUEST['room_no'];
	$d=$_REQUEST['room_rate'];
	
	
	mysql_connect("localhost","root","");
	mysql_select_db("restaurant");
	
		$img1=$_FILES['file_room']['name'];

	if($img1=="")
	{
		$img1=$r['room_path'];
	}
	else
	{
	$img1=$_FILES['file_room']['name'];
		$dest="../images/room/$img1";
		$src=$_FILES['file_room']['tmp_name'];
		move_uploaded_file($src,$dest);
	}
	mysql_query("update tbl_room_type set room_nm='$a',room_des='$b',room_no='$c',room_rate='$d',room_path='$img1' where id='$k'");
	

	header("Location:roomview.php?pageid=1");
	exit;
}

mysql_connect("localhost","root","");
mysql_select_db("restaurant");
$t=mysql_query("select * from tbl_room_type where id=".$_REQUEST['x']);
$r=mysql_fetch_row($t);

*/
?>


<div class="contain">
<form name="form" method="post"  enctype="multipart/form-data" >
<center>
<table width="500px" height="200px" align="center" cellspacing="15px">
<tr>
<th colspan="3">
<font size="+2" color="#0033FF">
Update Rooms Details
</font>
</th>
</tr>

<tr>
<td width="120px"><font size="3"><b>ID</b></font></td>
<td><input type="text" name="id" class="textbox" value='<?php echo $r[0]; ?>' readonly/></td>
</tr>


<tr>
<td width="120px"><font size="3"><b>RoomName</b></font></td>
<td><input type="text" name="room_nm" class="textbox" value='<?php echo $r[1]; ?>'/></td>
</tr>

<tr>
<td width="120px"><font size="3"><b>Description</b></font></td>
<td><input type="text" name="room_des" class="textbox" value='<?php echo $r[2]; ?>'/></td>

</tr>

<tr>
<td width="120px"><font size="3"><b>Total Rooms</b></font></td>
<td><input type="text" name="room_no" class="textbox" value='<?php echo $r[3]; ?>'/></td>

</tr>

<tr>
<td width="120px"><font size="3"><b>Rates</b></font></td>
<td><input type="text" name="room_rate" class="textbox" value='<?php echo $r[4]; ?>'/></td>

</tr>

<tr>
<td width="120px"><font size="3"><b>photo</b></font></td>
<td><?php echo"<img src='../images/room/$r[5]' height='100px' width='100px' name='img' />"; ?></td>
<td><input type="file" name="file_room" class="textbox"/></td>
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
</center>
</form>

</div>
<?php

include("footer.php");
?>