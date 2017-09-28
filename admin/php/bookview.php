<?php
include("header.php");
include("welcome.php");
include("menu.php");
session_start();
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
<div class=contain>
<form method="post">
<center>
<table border="0" width="1000px" height="200px">

<tr>
		<td colspan="10" align ="center">
		<font style="font-family:Comic Sans MS;color:#656565; size:+3"><h2><a href="user_view.php">View Rook Book Details</a></h2></font>
		</td>
</tr>

<tr>
	<td colspan="11" align=center>
		<input type=text name="find" size="30">&nbsp;
		<input type=submit name="se" value="Search">
	</td>
</tr>

<tr bgcolor="#999999" align="center">
	<td>
	<b><font style="font-family:Comic Sans MS; font-size: large;color:Black;">BookID</font></b>
	</td>
	
	<td>
	<b><font style="font-family:Comic Sans MS;font-size:15px;color:Black;">UserID</font></b>
	</td>
	
	<td>
	<b><font style="font-family:Comic Sans MS;font-size:15px;color:Black;">RoomID</font></b>
	</td>
    
	<td>
	<b><font style="font-family:Comic Sans MS;font-size:15px;color:Black;">Arrival Date</font></b>
	</td>
	
	<td>
	<b><font style="font-family:Comic Sans MS;font-size:15px;color:Black;">Departure Date</font></b>
	</td>

	
	<td>
	<b><font style="font-family:Comic Sans MS;font-size:15px;color:Black;">Total Price</font></b>
	</td>
	
	
    
    <td>
	<b><font style="font-family:Comic Sans MS;font-size:15px;color:Black;">Delete</font></b>
	</td>
</tr>
    
	
    <?php
/*mysql_connect("localhost","root","");

mysql_select_db("restaurant");

if(isset($_REQUEST['x']))
	mysql_query("delete from tmp_tbl_book where id=".$_REQUEST['x']);

if(isset($_REQUEST["se"]))
{
   $txt=$_REQUEST["find"];
	$select=mysql_query("select * from tmp_tbl_book where s_dt like '%$txt%' or e_dt like '%$txt%' or tot_price like '%$txt%'");
}
else
{
	$select=mysql_query("select * from tmp_tbl_book");
	$num_rec=mysql_num_rows($select);
	$per_page=3;
	$tot_page=ceil($num_rec/$per_page);

if(!isset($_GET['pageid']))
	{
	$select=mysql_query("select * from tmp_tbl_book limit 0,3");
				}
	
	if(isset($_GET['pageid']))
	{
		$page_no=$_GET['pageid'];
		$start_pos=(($page_no-1)*$per_page);
		//((2-1)*5)=1*5=5
		$select=mysql_query("select * from tmp_tbl_book limit $start_pos,$per_page");

	

	}

$k=1;
while($row=mysql_fetch_array($select))
{
	if($k%2==0)

	echo "<tr bgcolor=#BBBBBB>";
	else
	echo "<tr bgcolor=#808080>";
	
	echo"<td align='center'>$row[0]</td>";
	echo"<td align='center'>$row[1]</td>";
	echo"<td align='center'>$row[2]</td>";
	echo"<td align='center'>$row[3]</td>";
	echo"<td align='center'>$row[4]</td>";
	echo"<td align='center'>$row[5]</td>";
	//echo"<td align='center'>$row[6]</td>";
	
	//echo"<td align=center><a href='?x=$row[0]'><img src='../images/update.png' width='55px' height='30px'/></a></td>";


	echo"<td align=center><a href='bookview.php?x=$row[0]' onclick='return chk()'><img src='../images/delete.png' width='55px' height='30px'/></a></td>";
	
$k++;		
?>	
	</tr>

<?php
}}
*/?>



<!--table end-->
</table>
</form>

<?php
/*if(isset($_GET['pageid']) && $_GET['pageid']!=1)
{
	
	$page=$_GET['pageid']-1;
echo '<a style=text-decoration:none; href=bookview.php?pageid='.$page.'>Prev&nbsp;&nbsp;&nbsp;&nbsp;</a>';
}

if($_GET['pageid']!=1)
{
echo '<a style=text-decoration:none; href=bookview.php?pageid=1>First&nbsp;&nbsp;&nbsp;&nbsp;</a>';

}
	for($i=1;$i<=$tot_page;$i++)
	{
		echo '<a style=text-decoration:none; href=bookview.php?pageid='.$i.'>'. $i .'&nbsp;&nbsp;&nbsp;&nbsp;</a>';
		
	}
	
	if($_GET['pageid']!=$tot_page)
	{
	echo '<a style=text-decoration:none; href=bookview.php?pageid='.$tot_page.'>Last&nbsp;&nbsp;&nbsp;&nbsp;</a>';
	}
	
	if(isset($_GET['pageid']) && $_GET['pageid']!=$tot_page)
	{	
	$page=$_GET['pageid']+1;
	echo '<a style=text-decoration:none; href=bookview.php?pageid='.$page.'>Next&nbsp;&nbsp;&nbsp;&nbsp;</a>';
	}
*/
?>





</div>
<!--contain div end-->

<?php

include("footer.php");
?>



