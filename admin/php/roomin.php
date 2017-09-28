<?php
session_start();
include("header.php");
include("welcome.php");
include("menu.php");

?>
<div class=contain>
<form method="post" enctype="multipart/form-data">
<center>
<table border="1" align="center">
	
		<font style="font-family:Comic Sans MS;color:#000080;"><h2><center>Insert Room Details</center></h2></font>
	

	<tr>
	<td>
	<b><font style="font-family:Comic Sans MS;font-size:15px;color:Black;">Name:-</font></b>
	</td>
	<td><select name="room_nm">

<option >-----Room Types-----</option>

<option >Deluxe Room</option>
<option >Presidential Room</option>
<option >A/c Room</option>
<option >Non A/c Room</option>
</select>
</td>
</tr>
	
	<tr>
	<td>
	<b><font style="font-family:Comic Sans MS;font-size:15px;color:Black;">Description:-</font></b>
	</td>
	<td>
<input type="text" name="room_des" size="30" >
	</td></tr>	
	
    <tr>
	<td>
	<b><font style="font-family:Comic Sans MS;font-size:15px;color:Black;">Total Rooms:-</font></b>
	</td>
	<td>
<input type="text" name="room_no" size="30" >
	</td></tr>
    
	<tr>
	<td>
	<b><font style="font-family:Comic Sans MS;font-size:15px;color:Black;">Rates:-</font></b>
	</td>
	<td>
<input type="text" name="room_rate" size="30"/>
	</td>
</tr>
<td>
	<b><font style="font-family:Comic Sans MS;font-size:15px;color:Black;">Room Picture:-</font></b>
	</td>
<td>
<input type="file" name="file_room" size="30" />
	</td>
</tr>


<tr>
	<td colspan=4>
	<input type="submit" value="Insert" name="in" />
	
<input type="reset" value="Clear" size="30"/>
	</td>
	</tr>

</table>
</center>
</form>
</div>
<?php
//echo base64_decode(); input decode from the database
/*
if(isset($_REQUEST["in"]))
{
	$a=$_REQUEST['room_nm'];
	$b=$_REQUEST['room_des'];
	$c=$_REQUEST['room_rate'];
	$d=$_REQUEST['room_no'];
	
	
	$file=$_FILES['file_room']['name'];
		$dest="../images/room/$file";
		$src=$_FILES['file_room']['tmp_name'];
		move_uploaded_file($src,$dest);
	
	$_SESSION['pic']=$_REQUEST["$dest"];
	//$c=base64_encode($c);
	
	//use of md5 function it can not be found
		
	
	//$c=md5($c);
	//$c=base64_encode($c);
	
	mysql_query("insert into tbl_room_type values('','$a','$b','$d','$c','$file','1')");
	mysql_close();
	
}
 */
?>


<?php

include("footer.php");
?>
