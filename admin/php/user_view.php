<?php
include("header.php");
include("welcome.php");
include("menu.php");
session_start();
?>
<script src="../js/jquery.min.js"></script>

<script>
$(document).ready(function(){
//alert(' ');
$(".btn_act").click(function(){
	
	//alert('active clicked');
	var cact=$(this);
	var cactive = cact.attr("active");
	//alert(cactive);
	$.ajax({
		type:"GET",
		url:"fun_act.php",
		data:{cactive:cactive},
		success: function(){
		alert('success');
		location.reload();	
		}
	});
		});
	
	

$(".btn_dact").click(function(){
	
	alert('deactive clicked');
	var dact=$(this);
	var cdactive =dact.attr("dactive") ;
	//alert(cdactive);
	
	$.ajax({
		type:"GET",
		url:"fun_act.php",
		data:{cdactive:cdactive},
		success: function(){
		alert('success');
		location.reload();	
		}
		
		});
	
	
	});

});

</script>



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
<form method="post" enctype="multipart/form-data">
<center>
<table border="0" width="1000px" height="200px" align="center">

<tr>
		<td colspan="10" align ="center">
		<font style="font-family:Comic Sans MS;color:#656565; size:+3"><h2><a href="user_view.php">View User Information</a></h2></font>
		</td>
</tr>

<tr>
	<td colspan="11" align=center>
		<input type=text name="find" size="30">&nbsp;
		<input type=submit name="se" value="Search">
	</td>
</tr>

<tr bgcolor="#999999">
	<td>
	<b><font style="font-family:Comic Sans MS; font-size: large;color:Black;">ID</font></b>
	</td>
	
	<td>
	<b><font style="font-family:Comic Sans MS;font-size:15px;color:Black;">Name</font></b>
	</td>
	
	<td>
	<b><font style="font-family:Comic Sans MS;font-size:15px;color:Black;">Email</font></b>
	</td>
    
	<td>
	<b><font style="font-family:Comic Sans MS;font-size:15px;color:Black;">UserName</font></b>
	</td>
	
	<td>
	<b><font style="font-family:Comic Sans MS;font-size:15px;color:Black;">Password</font></b>
	</td>
	
	<td>
	<b><font style="font-family:Comic Sans MS;font-size:15px;color:Black;">Confirm paassword</font></b>
	</td>
	
	<td>
	<b><font style="font-family:Comic Sans MS;font-size:15px;color:Black;">City</font></b>
	</td>
	
	<td>
	<b><font style="font-family:Comic Sans MS;font-size:15px;color:Black;">Contact</font></b>
	</td>
	
	
	<td>
	<b><font style="font-family:Comic Sans MS;font-size:15px;color:Black;">Photo</font></b>
	</td>
	
	<td>
	<b><font style="font-family:Comic Sans MS;font-size:15px;color:Black;">Status</font></b>
	</td>


	
	
	<td>
	<b><font style="font-family:Comic Sans MS;font-size:15px;color:Black;">Delete</font></b>
	</td>
</tr>
    
	
    <?php
mysql_connect("localhost","root","");

mysql_select_db("restaurant");

if(isset($_REQUEST['x']))
	mysql_query("delete from tbl_user where id=".$_REQUEST['x']);

if(isset($_REQUEST["se"]))
{
   $txt=$_REQUEST["find"];
	$select=mysql_query("select * from tbl_user where name like '%$txt%' or email like '%$txt%' or unm like '%$txt%'");
}
else
{
	$select=mysql_query("select * from tbl_user");
$num_rec=mysql_num_rows($select);
	$per_page=3;
	$tot_page=ceil($num_rec/$per_page);

if(!isset($_GET['pageid']))
	{
	$select=mysql_query("select * from tbl_user limit 0,3");
				}
	
	if(isset($_GET['pageid']))
	{
		$page_no=$_GET['pageid'];
		$start_pos=(($page_no-1)*$per_page);
		//((2-1)*5)=1*5=5
		$select=mysql_query("select * from tbl_user limit $start_pos,$per_page");

	

	}

$k=1;
while($row=mysql_fetch_array($select))
{
	if($k%2==0)
{
	echo "<tr bgcolor=#BBBBBB>";
	
}
	else
{
	echo "<tr bgcolor=#808080>";
	
}
	echo"<td align='center'>$row[0]</td>";
	echo"<td align='center'>$row[1]</td>";
	echo"<td align='center'>$row[2]</td>";
	echo"<td align='center'>$row[3]</td>";
	echo"<td align='center'>$row[4]</td>";
	echo"<td align='center'>$row[5]</td>";
	echo"<td align='center'>$row[6]</td>";
	echo"<td align='center'>$row[7]</td>";
	echo"<td align='center'><img src='../$row[8]' height=100px width=100px/></td>";
		//echo"<td align='center'>$row[9]</td>";

//	echo"<td align=center><a href=''><img src='../images/update.png' width='55px' height='30px'/></a></td>";
echo"<td>"; 
if($row['status']==1)
{ ?>
<a href="#" active="<?php echo $row['id'] ?>" class="btn_act">
<img src="../images/update.png" width="50px" height="35px" />
</a>
<?php
}
else
{?>
<a href="#" dactive="<?php echo $row['id'] ?>" class="btn_dact">
<img src="../images/delete.png" width="50px" height="35px" />
	</a>
	<?php

}
 echo"</td>"; 



	echo"<td align=center><a href='user_view.php?x=$row[0]' onclick='return chk()'>Delete</a></td>";
	
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

?>


</div>
<!--contain div end-->

<?php

include("footer.php");
?>



