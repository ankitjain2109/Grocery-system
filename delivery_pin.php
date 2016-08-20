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
				echo "Your Details Are Displayed.. If you want to change, change it here..";
			}
?>
<link href="effects.css" rel="stylesheet" type="text/css" />




<form action="delivery_pin.php" enctype="multipart/form-data" method="post">

<table width="442" height="345" class="effectscale" align="center" cellpadding="0" cellspacing="0" style="background-color:#ffffff; color:#FFFFFF; font-size:14px; font-family:Arial; font-weight:bold; padding-left:10px; box-shadow:0px 0px 10px #979393">
  <tr>
  	<td  style="color:#404040">
	<h2 align="left">  Delivery PIN ADDRESS  </h2>
	<p><h2 align="left" style="color:#CFCFCF"> -------------------------------- </h2></p>

<h4 align="left">
<p>&nbsp;&nbsp;&nbsp;Pincode   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" name="pincode" value="<?php echo $res['pincode']; ?>" hspace="75px"/>
                </p>
				<br>
				<p align="center"><input type="submit" name="update_pin" value="Update Details" height="30px" width="40px" align="middle" /></p>
				
</h4>
</td>
</tr>
</table>
</form>
