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
				echo "Your Details Are Displayed.. locate on map here";
			}
?>
<link rel="stylesheet" type="text/css" href="effects.css">
<form method="post" >


<table width="442" height="345" class="effectscale"  align="center" cellpadding="0" class="image1" cellspacing="0" style="background-color:#ffffff; color:#FFFFFF; font-size:14px; font-family:Arial; font-weight:bold; padding-left:10px; box-shadow:0px 0px 10px #979393">
  <tr>
  	<td  style="color:#404040">
	<h2 align="left">  Your Address  </h2>
	<p><h2 align="left" style="color:#CFCFCF"> -------------------------------- </h2></p>

	<h4 align="left">
                  <?php 
				  		echo $res['house_no']; echo" <br>";
				  		echo $res['address'];  echo" <br>";
						echo $res['place'] ; echo" <br>";
						echo $res['state'] ; echo" <br>";
				  
				  ?>
                
				<br>
				<p align="center"><input type="submit" name="locate" value="locate your address here" height="30px" width="50px" align="middle" /></p>
</h4>

	
	</td>
  </tr>
</table>

</form>