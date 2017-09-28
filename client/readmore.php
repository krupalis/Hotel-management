<?php

include('head.php');
include('config.php');
error_reporting(0);
?>

<div id="content">

    <div class="wrapper">
      
      <div class="content" style="width:900px">
        <div class="indent">
        <?php /*?><div class="contant2">
			<div class="read1">
<?php */?>
          <?php
	/*	  $query="select * from tbl_room_type where room_status='1' and id='$_GET[id]'";
		  $client=$_GET['id'];
		  
		  $_SESSION['id']=$client;
$run=mysql_query($query);
while($row=mysql_fetch_array($run))
{	
		$_SESSION['room_id']=$row['id'];
		$_SESSION['room_nm']=$row['room_nm'];
 		$_SESSION['room_rate']=$row['room_rate'];	
*/			
			
			
			echo "<div style='position:relative;left:50px'>
			
		<img src='../admin/images/room/$row[room_path]' width='200px' height='200px'/></div>
   
   <div style='position:absolute;left:50%;top:20%;'>
  <table width=300px cellspacing=10 border=0 align='center'>
	<tr><td><b><font style='font-family:calibiri;font-size:15px;color:#C30000;'>Name :-</font></b></td><td><font class='font'>$row[room_nm] </font></td></tr>
	
	<tr><td><b><font style='font-family:calibiri;font-size:15px;color:#C30000;'>Features:-</font></b></td><td><font class='font'>$row[room_des]</font> </td></tr>
	
	<tr><td><b><font style='font-family:calibiri;font-size:15px;color:#C30000;'>Total Rooms:-</font></b></td><td><font class='font'>$row[room_no]</font> </td></tr>
	
	<tr><td><b><font style='font-family:calibiri;font-size:15px;color:#C30000;'>Rates:-</font></b></td><td><font class='font'>$row[room_rate]</font> </td></tr>
	
	
	<tr><td><td><a href=login.php><font style='font-family:calibiri;font-size:25px;color:#C30000;'>Book It</font></a></td></td></tr>
	
	
</tr></table></div>";
$k++;
/*
}*/
?>
		


		
	
	  
		  
          
      </div>
    </div>
  </div>
</div>
<?php
include('foot.php');
?>