

<?php
session_start();
include("header.php");
include("welcome.php");
include("menu.php");

?>
<script>
	/*function chk()
	{
		return(confirm("Do you want to delete it ?"));
	}*/
	
	function chk()
	{
		z=confirm("Delete ?");
		return z;
	}
	
</script>
<!--contain div start-->
<div class="contain">


<form method="post" enctype="multipart/form-data">
<center>
<table border="0" width="1000px" height="200px" align="center">

<tr>
		<td colspan="10" align ="center">
       <?php /*?> <?php echo "<a href='roomview.php?pageid=1'>"; ?> <?php */?>
		<font style="font-family:Comic Sans MS;color:#656565; size:+3; "><h2>View Room Details</font></a></h2>
		</td>
</tr>

<tr>
	<td colspan="11" align="center">
		<input type="text" name="find" size="30">&nbsp;
		
<?php /*?><select name="find">

<option >-----Room Types-----</option>
<option >Deluxe Room</option>
<option >Presidential Room</option>
<option >A/c Room</option>
<option >Non A/c Room</option>
</select>
&nbsp;
<?php */?>
<input type="submit" name="se" value="Search">
	</td>
</tr>

<tr bgcolor="#999999" align="center">
	
	
	<td>
	<b><font style="font-family:Comic Sans MS;font-size:20px;color:Black;">RoomName</font></b>
	</td>
	
	<td>
	<b><font style="font-family:Comic Sans MS;font-size:20px;color:Black;">Description</font></b>
	</td>
    
    <td>
	<b><font style="font-family:Comic Sans MS;font-size:20px;color:Black;">Room No</font></b>
	</td>
    
	<td>
	<b><font style="font-family:Comic Sans MS;font-size:20px;color:Black;">RoomRates</font></b>
	</td>

	<td>
	<b><font style="font-family:Comic Sans MS;font-size:20px;color:Black;">RoomPhoto</font></b>
	</td>

	
	<td>
	<b><font style="font-family:Comic Sans MS;font-size:20px;color:Black;">Update</font></b>
	</td>

	
	<td>
	<b><font style="font-family:Comic Sans MS;font-size:20px;color:Black;">Delete</font></b>
	</td>
</tr>
    
	
        <?php
/*mysql_connect("localhost","root","");

mysql_select_db("restaurant");

/*	if(isset($_POST["se"]))
{
   $txt=$_REQUEST["find"];
	$select=mysql_query("select * from tbl_room_type where room_nm like '%$txt%'");
}



 if(isset($_REQUEST['x']))
{	mysql_query("delete from tbl_room_type where id=".$_REQUEST['x']);
?>
<script type="text/javascript">
window.location.href="roomview.php?pageid=1";
</script>
<?php
}
	

	
	


if(!isset($_GET['pageid']))
	{
	$select=mysql_query("select * from tbl_room_type limit 0,3");

	}

	
else
{
	$select=mysql_query("select * from tbl_room_type");
	$num_rec=mysql_num_rows($select);
	$per_page=3;
	$tot_page=ceil($num_rec/$per_page);





if(!isset($_GET['pageid']))
	{
	$select=mysql_query("select * from tbl_room_type limit 0,3");
				}
	
	if(isset($_GET['pageid']))
	{
		$page_no=$_GET['pageid'];
		$start_pos=(($page_no-1)*$per_page);
		//((2-1)*5)=1*5=5
		$select=mysql_query("select * from tbl_room_type limit $start_pos,$per_page");

	

	}
if(isset($_POST["se"]))
{
   $txt=$_REQUEST["find"];
	$select=mysql_query("select * from tbl_room_type where room_nm like '%$txt%' limit 0,3");
}


$k=1;
while($row=mysql_fetch_array($select))
{
	if($k%2==0)

	echo "<tr bgcolor=#BBBBBB>";
	else
	echo "<tr bgcolor=#808080>";
	
	//echo"<tr bgcolor='#FFFFFF'><td align='center'>$row[0]</td>";
	echo"<td align='center'>$row[1]</td>";
	echo"<td align='center'>$row[2]</td>";
	echo"<td align='center'>$row[3]</td>";
	echo"<td align='center'>$row[4]</td>";
	echo"<td align='center'><img src='../images/room/$row[5]' height=100px width=100px/></td>";
	
	echo"<td align=center><a href='roomup.php?x=$row[0]'><img src='../images/update.png' width='55px' height='30px'/></a></td>";


	echo"<td align=center><a href='roomview.php?x=$row[0]' onclick='return chk()'><img src='../images/delete.png' width='55px' height='30px'/></a></td>";
	
$k++;	
	


?>	
	</tr>

<?php
}}
?>



<!--table end-->
</table>
</form>

<?php
if(isset($_GET['pageid']) && $_GET['pageid']!=1)
{
	
	$page=$_GET['pageid']-1;
echo '<a style=text-decoration:none; href=roomview.php?pageid='.$page.'>Prev&nbsp;&nbsp;&nbsp;&nbsp;</a>';
}

if($_GET['pageid']!=1)
{
echo '<a style=text-decoration:none; href=roomview.php?pageid=1>First&nbsp;&nbsp;&nbsp;&nbsp;</a>';

}
	for($i=1;$i<=$tot_page;$i++)
	{
		echo '<a style=text-decoration:none; href=roomview.php?pageid='.$i.'>'. $i .'&nbsp;&nbsp;&nbsp;&nbsp;</a>';
		
	}
	
	if($_GET['pageid']!=$tot_page)
	{
	echo '<a style=text-decoration:none; href=roomview.php?pageid='.$tot_page.'>Last&nbsp;&nbsp;&nbsp;&nbsp;</a>';
	}
	
	if(isset($_GET['pageid']) && $_GET['pageid']!=$tot_page)
	{	
	$page=$_GET['pageid']+1;
	echo '<a style=text-decoration:none; href=roomview.php?pageid='.$page.'>Next&nbsp;&nbsp;&nbsp;&nbsp;</a>';
	}
*/
?>

</div>
<!--contain div end-->

<?php

include("footer.php");
?>
