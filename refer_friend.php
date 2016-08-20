<?php
mysql_connect("localhost","root","");
mysql_select_db("minor") or die(mysql_error());

session_start();
$log=$_REQUEST['log'];
if($log=="logout")
{
	unset($_SESSION['sid']);
	header("location:main.php");
}

$uid=$_SESSION['sid'];
?>

<?php
		
		$sql=mysql_query("select * from registration where email='$uid'");
		$res=mysql_fetch_array($sql);
		if($res)
			{
				echo "Hey $uid Refer Your Friend Our Page If You Have Liked Our Services";
			}
?>

<link rel="stylesheet" type="text/css" href="effects.css">
<form method="post" enctype="multipart/form-data" action="account.php">


<table width="442" height="345" class="effectscale"  align="center" cellpadding="0" cellspacing="0" style="background-color:#ffffff; color:#FFFFFF; font-size:14px; font-family:Arial; font-weight:bold; padding-left:10px; box-shadow:0px 0px 10px #979393">
  <tr>
  	<td  style="color:#404040">
	<h2 align="left">  Invite Your Friend </h2>
	<p><h2 align="left" style="color:#CFCFCF"> -------------------------------- </h2></p>

	<h4 align="left">
                <p>&nbsp;&nbsp;&nbsp;Mail Id&nbsp;&nbsp;&nbsp;
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <input type="text" name="mailid" placeholder="Enter mail id of your friend" style="width:192px" hspace="49px"/>
                </p>
                <p>&nbsp;&nbsp;&nbsp;Message	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<textarea name="msg" rows="4" cols="25" placeholder="Hey Friend, I would like to invite you to join Daily Needs shopping portal and enjoy the services as it's very good.Thanks"></textarea>
                
				<br>
				<p align="center"><input type="submit" name="send" value="Invite Friend" height="20px" width="80px" align="middle" /></p>
</h4>
<h3>
Under Construction
</h3>
	
	</td>
  </tr>
</table>


</form>