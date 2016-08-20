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
<link href="effects.css" rel="stylesheet" type="text/css" />


<form method="post" enctype="multipart/form-data" action="change_address.php">


<table width="530" height="345" class="effectscale"  align="center" cellpadding="0" cellspacing="0" style="background-color:#ffffff; color:#FFFFFF; font-size:14px; font-family:Arial; font-weight:bold; padding-left:10px; box-shadow:0px 0px 10px #979393">
  <tr>
  	<td  style="color:#404040">
	<h2 align="left">  Personal Details  </h2>
	<p><h2 align="left" style="color:#CFCFCF"> -------------------------------- </h2></p>

	<h4 align="left">
				<table hspace="20px">
					<tr>
						<td valign="top">
                 		<?php 
				  		echo "<h3>"; echo $res['first_name'];echo "&nbsp;&nbsp;"; echo $res['last_name'];echo" <br>"; echo "</h3>";
						echo "Date Of Birth &nbsp;&nbsp;&nbsp;"; echo $res['dob'] ; echo" <br>";
				  		echo "Mobile Number &nbsp;";echo $res['mob_no'];  echo" <br>";
				  
				  		?>
                
				<br>
				
						</td>
						
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<td valign="top" style="border-left:1px solid #acacac;">
						<h3 style="margin-top:0px;">&nbsp;&nbsp;&nbsp;&nbsp;Primary Delivery Address</h3>
						<?php
			echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";echo $res['house_no'];echo" <br>";
			echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";echo $res['address'];echo" <br>";
			echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";echo $res['place'] ; echo" <br>";
			echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";echo $res['state'];  echo" <br>";
			echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";echo $res['pincode'] ; echo" <br>";
							
						?>				
						<p align="center"><img title="locate your address" name="locate_on_google" src="Pj/Google-maps-logo.jpg" height="40px" width="50px" name="locate" align="middle"/></p>			
						</td>
					
					
					
					</tr>
				</table>



</h4>

	
	</td>
  </tr>
</table>

</form>