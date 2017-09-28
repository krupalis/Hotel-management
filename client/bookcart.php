<?php
session_start();
include('head.php');
include('config.php');
/*error_reporting(0);

$paypal_id='krupspatel789@gmail.com';
?>
<?php
if(isset($_POST["clr"]))
{
	
	session_destroy();
	?>
    <script>
	window.location.href="index.php";
function goBack()(
window.location.href="services.php";
)
</script>	
	<?php
}?>

<?php

if(isset($_REQUEST["in"]))
{
	$a=$_SESSION['user_id'];
	$b=$_SESSION['room_id'];
	$c=$_SESSION['from'];
	$d=$_SESSION['to'];
	
	$e=$_SESSION['tot'];
	

	mysql_query("insert into tmp_tbl_book values('','$a','$b','$c','$d','$e','1')");
	
	mysql_close();	
}
?>
*/
<div id="content">
    <div class="wrapper">
      
      <div class="content" style="width:900px">
        <div class="indent">
        <form name="frm" method="post" action="https://www.sandbox.paypal.com/cgi-bin/webscr">
        
        <input type='hidden' name='business' value='<?php echo $paypal_id; ?>'>
		<input type='hidden' name='cmd' value='_xclick'>
		<input type='hidden' name='amount' id="amt" value="<?php echo $_SESSION['tot']; ?>">
		<input type='hidden' name='no_shipping' value='1'>
		<input type='hidden' name='currency_code' value='USD'>
		
		<input type='hidden' name='cancel_return' value='http://localhost/Rangilu Kathiyawad/client/cancel.php'>
		
		<input type='hidden' name='return'  value='http://localhost/Rangilu Kathiyawad/client/confirm.php'>
        
        
        
<table border="0" width="100%" height="30%">


<tr bgcolor="#999999">
	<td>
	<b><font style="font-family: Verdana, Geneva, sans-serif; font-size:12px;color:Black;"><center>Room Name</center></font></b>
	</td>
	
	<td>
	<b><font style="font-family:Verdana, Geneva, sans-serif;font-size:12px;color:Black;"><center>Arrival Date</center></font></b>
	</td>
	
	<td>
	<b><font style="font-family:Verdana, Geneva, sans-serif;font-size:12px;color:Black;"><center>Departure Date</center></font></b>
	</td>
    
	<td>
	<b><font style="font-family:Verdana, Geneva, sans-serif;font-size:12px;color:Black;"><center>Price</center></font></b>
	</td>
	
	<td>
	<b><font style="font-family:Verdana, Geneva, sans-serif;font-size:12px;color:Black;"><center>Days</center></font></b>
	</td>
	
	<td>
	<b><font style="font-family:Verdana, Geneva, sans-serif;font-size:12px;color:Black;"><center>Total</center></font></b>
	</td>
	
	
</tr>
<tr>
<td><center><font style='font-family:calibiri;font-size:18px;color: #FFFBF0 ;'><?php echo $_SESSION['room_nm']; ?></font></center></td>


<td><center><font style='font-family:calibiri;font-size:18px;color:#FFFBF0;'><?php echo $_SESSION['from']; ?></font></center></td>

<td><center><font style='font-family:calibiri;font-size:18px;color:#FFFBF0;'><?php echo $_SESSION['to']; ?></font></center></td>

<td><center><font style='font-family:calibiri;font-size:18px;color:#FFFBF0;'><?php echo $_SESSION['room_rate']; ?></font></center></td>

<td><center><font style='font-family:calibiri;font-size:18px;color:#FFFBF0;'><?php  echo $_SESSION['day']+1;?>
</font></center></td>

<td><center><font style='font-family:calibiri;font-size:18px;color:#FFFBF0;'><?php 


if($_SESSION['day']==0)
{
	$tot= $_SESSION['room_rate'] ;
}
else{

$tot= $_SESSION['room_rate'] * ($_SESSION['day']+1);
}
$_SESSION['tot']=$tot;
echo $tot;
?></font></center></td>
</tr>

<tr>
<td colspan="5" align="right"><button onclick="goback()">Back</button> </td><td><input type="submit" name="in" value="Book Now"></td>
</tr>
</table>
</form>
        </div>
      </div>
    </div>
  </div>
  
  


<?php
include('foot.php');
?>
