<?php

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>my orders</title>
</head>

<body>
MY ORDERS
<br />
<br/>

<?php

mysql_connect("localhost","root","");
mysql_select_db("minor") or die(mysql_error());


		$sql=mysql_query("select * from cart_add where email='$uid'");
		
			echo "<table border='2px' style='width:100%; border-color:#7F9FFF'><tr>";
			echo "<th style='width:20%;'>";
			echo "Your Items";
			echo "</th>";
			echo "<th style='width:40%;'>";
			echo "Image";
			echo "</th>";
			echo "<th style='width:20%'>";
			echo "Quantity";
			echo "</th>";
			echo "<th style='width:20%;'>";
			echo "Price Of Product";
			echo "</th style='width:20px;'>";
			echo "</tr></table>";

		while($res=mysql_fetch_array($sql))
		{	
			echo "<table border='2px' style='width:100%; border-color:#7F9FFF'><tr>";
			echo "<th style='width:20%'>";
			echo "-->";
			echo "</th>";
			echo "<th style='width:40%'>";
			echo "<img src='".$res['product_imgname']."' width='150px' height='150px'/>";
			echo "</th>";
			echo "&nbsp;&nbsp;&nbsp;&nbsp;";
			echo $res['product_name'];
			echo "<th style='width:20%'>";
			echo "&nbsp;&nbsp;";
			echo $res['qty'];
			echo "</th>";
			echo "<th style='width:20%'>";
			echo "&nbsp;&nbsp;";
			echo $res['product_price'];
			echo "</th>";
			echo "<br/>";
			echo "</tr></table>";
			
		
		}


?>


</body>
</html>
