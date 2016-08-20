<?php
mysql_connect("localhost","root","");
mysql_select_db("minor") or die(mysql_error());

?>
<?php
		
		$sql=mysql_query("select * from registration where email='$uid'");
		$res=mysql_fetch_array($sql);
		if($res)
			{
				echo "Your Details Are Displayed.. If you want to change, change it here..";
			}
?>
<link rel="stylesheet" type="text/css" href="effects.css">

<form method="post" enctype="multipart/form-data" action="account.php">


<table width="442" height="345"  align="center" class="effectscale" cellpadding="0" cellspacing="0" style="background-color:#ffffff; color:#FFFFFF; font-size:14px; font-family:Arial; font-weight:bold; padding-left:10px; box-shadow:0px 0px 10px #979393">
  <tr>
  	<td  style="color:#404040">
	<h2 align="left">  Delivery Address  </h2>
	<p><h2 align="left" style="color:#CFCFCF"> -------------------------------- </h2></p>

	<h4 align="left">
                  <p>&nbsp;&nbsp;&nbsp;House No & Details &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <input type="text" value="<?php echo $res['house_no']; ?>" name="house"/>
                  </p>
                <p>&nbsp;&nbsp;&nbsp;Address &nbsp;&nbsp;&nbsp;
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <input type="text" name="address" value="<?php echo $res['address']; ?>" hspace="49px"/>
                </p>
                <p>&nbsp;&nbsp;&nbsp;Place &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" value="<?php echo $res['place']; ?>" name="place" hspace="75px"/>
                </p>
                <p>&nbsp;&nbsp;&nbsp;State &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <input type="text" name="state" value="<?php echo $res['state']; ?>" hspace="75px"/>
                  </p>
                
				<br>
				<p align="center"><input type="submit" name="update" value="Update Details" height="30px" width="40px" align="middle" /></p>
</h4>

	
	</td>
  </tr>
</table>

</form>