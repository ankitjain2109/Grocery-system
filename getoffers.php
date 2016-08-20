<?php
$q = strval(($_GET['q']));
$con = mysqli_connect('localhost','root','');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}
mysqli_select_db($con,"minor");

if ($q=='popularity')
{
$sql="SELECT * FROM offers";
$result = mysqli_query($con,$sql);
}
else if ($q=='pricehightolow')
{
$sql="SELECT * FROM offers ORDER BY offer_price DESC";
$result = mysqli_query($con,$sql);
}

else if ($q=='pricelowtohigh')
{
$sql="SELECT * FROM offers ORDER BY offer_price ASC";
$result = mysqli_query($con,$sql);
}
else if ($q=='alphabetical')
{
$sql="SELECT * FROM offers ORDER BY product_name";
$result = mysqli_query($con,$sql);
}

else if ($q=='between50and75')
{
$sql="SELECT * FROM offers where offer_price < 50 ";
$result = mysqli_query($con,$sql);
}
else if ($q=='between75and100')
{
$sql="SELECT * FROM offers where offer_price between 75 and 100";
$result = mysqli_query($con,$sql);
}
else if ($q=='between100and500')
{
$sql="SELECT * FROM offers where offer_price > 100";
$result = mysqli_query($con,$sql);
}

else if ($q=='50gm')
{
$sql="SELECT * FROM offers where quantity LIKE '50gm%'";
$result = mysqli_query($con,$sql);
}
else if ($q=='100gm')
{
$sql="SELECT * FROM offers where quantity LIKE '250gm%'";
$result = mysqli_query($con,$sql);
}
else if ($q=='oth')
{
$sql="SELECT * FROM offers where quantity LIKE '1%'";
$result = mysqli_query($con,$sql);
}
echo "<table  id='tab' cellpadding='10' cellspacing='8' >";

$k=0;
while($row = mysqli_fetch_array($result))
 {
 if($k%4==0)
  echo "<tr>";
  echo"<td>";echo"<a href='".$row['link']."' style='text-decoration:none'>";
  echo'<img id="imgBox" width="150px" height="150px" src='.'"Pj/offers/'.$row['img_name'].'"'.">";echo"</a>";
 echo "<br>"; echo"FRESH:";
 echo"<a href='".$row['link']."' style='text-decoration:none'>";echo"<strong>";echo $row['product_name'];echo"</strong>";echo"</a>";echo "<br>";
 echo"Discount:"; echo $row['discount'];echo "%<br>";
  echo"Quantity:"; echo $row['quantity'];
 echo"</td>";
++$k;
}
echo "</tr>";
echo "</table>";

mysqli_close($con);
?>
<link type="text/css" href="effects.css" rel="stylesheet" />