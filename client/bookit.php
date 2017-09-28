<?php

include('head.php');
include('config.php');
error_reporting(0);
?>
         <link rel="stylesheet" type="text/css" href="css/l_style.css" />
<!--  <script type="text/javascript">
        function GetDays(){
                var dropdt = new Date(document.getElementById("drop_date").value);
                var pickdt = new Date(document.getElementById("pick_date").value);
                return parseInt((dropdt - pickdt) / (24 * 3600 * 1000));
        }

        function cal(){
        if(document.getElementById("drop_date")){
            document.getElementById("numdays2").value=GetDays();
        }  
    }

    </script>-->
<?php
$count=0;

if(isset($_REQUEST["in"]))
{
	$date=$_REQUEST['s_dt'];
	if($date=="")
	{
	echo "<script>alert('Enter Arrival Date');</script>";
	$count++;	
	}
	
	$date1=$_REQUEST['e_dt'];
	if($date1=="")
	{
	echo "<script>alert('Enter Departure Date');</script>";
	$count++;
	}
}

if(isset($_REQUEST['in']) && $count==0)
{ 

	
	
	$b=$_REQUEST["s_dt"];
	$_SESSION['from']=$_REQUEST["s_dt"];
	$c=$_REQUEST["e_dt"];
	$_SESSION['to']=$_REQUEST["e_dt"];
	$d=$_REQUEST["tot_price"];
	$e=$_REQUEST["password"];
$f=$_REQUEST["c_password"];
	$g=$_REQUEST["city"];
	$i=$_REQUEST["mobile"];
	$j=$_REQUEST["status"];
$_SESSION['day']=$_REQUEST["numdays"];;
	
	mysql_connect("localhost","root","");
	mysql_select_db("restaurant");
	mysql_query("insert into tmp_tbl_book values ('','$b','$c','1')");
mysql_close();
?>
<script type="text/javascript">
 window.location.href="bookcart.php";
 </script>

<?php	
}
?>	


		 
		 
 
<div id="content">
    <div class="wrapper">
      
      <div class="content">
        <div class="indent">
			 <div id="form_wrapper" class="form_wrapper">
					<form class="register active" method="post" enctype="multipart/form-data">
						<h3>Room Book</h3>
						
							<div>
								<label>Name:</label>
								<input type="text" name="" class="txtcolor" value="<?php echo $_SESSION['user_name']?>"/>
								<span class="error">This is an error</span>
							</div>
							<div>
															<div>
								<label>Room:</label>
								<input type="text" name="" value="<?php echo $_SESSION['room_nm']?>"/>
								<span class="error">This is an error</span>
							</div>
							<div>
								<label>Arrival Date:</label>
<input type="date" class="inp" size="12" id="pick_date" name="s_dt" onchange="cal()"  /> 
								<span class="error">This is an error</span>
							</div>
							<div>
								<label>Departure Date:</label>
								<input type="date" size="12" id="drop_date" name="e_dt" onchange="cal()" /> 
</br>
<input type="hidden" class="textbox" id="numdays2" name="numdays"/>

								<span class="error">This is an error</span>
							</div>
                            
                            <div>
								<label><center><font color="#FF0000" size="+2">Warning</font></label><br />
	
    <font size="+1" color="#2A0000" >*You can not Cancel your booking once room is booked!!</font></center>
											
                                
							</div>
							
							
							
							
						
						<div class="bottom">
							<div class="remember">
							</div>
							<input type="submit" value="Book Now" name="in"  />
                            
							
							<div class="clear"></div>
						</div></div></div>
					</form>
				



</div>
</div>
</div>
</div>

<?php
include('foot.php');
?>