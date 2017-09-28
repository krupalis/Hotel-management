<?php
include('head.php');
?>
<link href='http://fonts.googleapis.com/css?family=Rochester' rel='stylesheet' type='text/css'>
<script language="javascript">
function user()
{
	if(document.form.username.value=="")
	{
		alert("Enter name")
		document.form.username.focus();
		return false;
	}
	
	if(document.form.useremail.value.indexOf('@',0)==-1 || document.form.useremail.value.indexOf('.',0)==-1)
	{
	alert("Email field requires an \"@\" and \".\". \n  please  enter  valid  email id..");
		document.form.useremail.focus();
		return false;
	}
	
	if(document.form.usermsg.value=="")
	{
		alert("Enter comment")
		document.form.usermsg.focus();
		return false;
	}
}
function fnm(event)
{

	if(!(event.keyCode>=65 && event.keyCode<=90 || event.keyCode>=97 && event.keyCode<=122 || event.keyCode==32 || event.keyCode==32))
	
	{
		
				alert("enter only name")
				event.keyCode=0;
	} 
}
function no(event)
{
	if(!(event.keyCode>=48 && event.keyCode<=57 || event.keyCode==32 || event.keyCode==32))
	{
				alert("enter only number")
				event.keyCode=0;
	} 
	
}





</script>




<div id="content">
    <div class="wrapper">
      
      <div class="content" style="width:900px">
        <div class="indent"><font color="red">
          <h2>FeedBack</h2>
		  
		  
		     <form name="form" method="post" enctype="multipart/form-data" onSubmit="return user()">
			

Your name: <br>
<input type="text" name="username"><br>
<br>

Your email: <br>
<input type="text" name="useremail"><br>
<br>

Your comments: <br>
<textarea name="usermsg" rows="15" cols="50"></textarea><br><br>

<input type="submit" value="Submit" name="in">
 
</form>		   </font>
               
          </div>
        </div>
      </div>
    </div>
  </div>

<?php
//echo base64_decode(); input decode from the database
/*$count=0;
if(isset($_REQUEST["in"]))
{
	$unm=$_REQUEST['username'];
	if($unm=="")
	{
	echo "<script>alert('Enter UserName');";
	}
	$uem=$_REQUEST['useremail'];
	if($uem=="")
	{
	echo "<script>alert('Enter UserEmail');</script>";
	$count++;
	}
	if($umsg=="")
	{
	echo "<script>alert('Enter UserEmail');</script>";
	$count++;
	}
}

if(isset($_REQUEST["in"]) && $count==0)
{
	$a=$_REQUEST["username"];
	$b=$_REQUEST["useremail"];
	$c=$_REQUEST["usermsg"];
	
	
	
	//$c=base64_encode($c);
	
	//use of md5 function it can not be found
		
	
	//$c=md5($c);
	//$c=base64_encode($c);
	mysql_connect("localhost","root","");
	
	mysql_select_db("restaurant");
	mysql_query("insert into tbl_feedback values('','$a','$b','$c')");
	mysql_close();
	
}
 */
?>




<?php
include('foot.php');
?>
