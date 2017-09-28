<?php
include('head.php');
include('config.php');
error_reporting(0);
?>

<div id="content">
    <div class="wrapper">
      
      <div class="content" style="width:900px">
        <div class="indent">
		
<?php
		  $query="select * from tbl_room_type where room_status='1'";
$run=mysql_query($query);

while($row=mysql_fetch_array($run))
{	echo"<div class='readmore'>"; 		
		
		echo "<table class='newtable'>
		<tr>
		<td rowspan='2'><center>
		
		<img src='../admin/images/room/$row[room_path]' width='200px' height='200px'/></center>
		</td>
		<td>
		<center>
		<font color='white' size='+2' face='Elephant'>$row[room_nm]</font>
		</center>
		</td>
		</tr>
		<tr>	
		<td  >
		<center>	<a href='readmore.php?id=$row[id]' style='text-decoration:none;'>&nbsp;&nbsp;
		<font color='#FFF' size='+2' face='Times New Roman, Times, serif' style='background:url(../images/header-bg-top.jpg);padding:10px;	box-shadow:0px 0px 10px 5px #2E1F17;'>More Details</font></a>
		</center>
		</td>
		</tr>";
			
	echo "</table></div>";
	
		}
		  
	?>	  			

        </div>
      </div>
    </div>
  </div>

<?php
include('foot.php');
?>
