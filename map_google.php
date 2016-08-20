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
mysql_connect("localhost","root","") ;
mysql_select_db("minor") or die(mysql_error());


$sql=mysql_query("select * from registration where email='$uid'");
while($res=mysql_fetch_array($sql))
{

$place=$res['place'];
$state=$res['state'];
$address=$res['address'];

echo $res['address']; echo ","; echo $res['place'];echo ","; echo $res['state'];

}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<table width="75%" height="100%" border="2px" align="center" style="background-color:#E4E3E6;">

	<tr>
	  <td width="100%" rowspan="2" align="left" hspace="10px">




<iframe width="100%" height="467" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.co.uk/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=<?php echo "$address,+$place,+$state";?>&amp;aq=&amp;sspn=0.111915,0.295601&amp;ie=UTF8&amp;hq=&amp;hnear=<?php echo "$address,+$place,+$state";?>&amp;z=12&amp;output=embed"></iframe>





</td>
</tr></table>


</body>
</html>
