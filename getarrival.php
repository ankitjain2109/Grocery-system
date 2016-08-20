<?php
$q = strval(($_GET['q']));
$con = mysqli_connect('localhost','root','');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}
mysqli_select_db($con,"minor");

if ($q=='popularity')
{
$sql="SELECT * FROM new_arrival";
$result = mysqli_query($con,$sql);
}
else if ($q=='pricehightolow')
{
$sql="SELECT * FROM new_arrival ORDER BY price DESC";
$result = mysqli_query($con,$sql);
}

else if ($q=='pricelowtohigh')
{
$sql="SELECT * FROM new_arrival ORDER BY price ASC";
$result = mysqli_query($con,$sql);
}
else if ($q=='alphabetical')
{
$sql="SELECT * FROM new_arrival ORDER BY product_name";
$result = mysqli_query($con,$sql);
}

else if ($q=='between21and50')
{
$sql="SELECT * FROM new_arrival where price between 21 and 50";
$result = mysqli_query($con,$sql);
}
else if ($q=='between51and100')
{
$sql="SELECT * FROM new_arrival where price between 51 and 100";
$result = mysqli_query($con,$sql);
}
else if ($q=='between101and200')
{
$sql="SELECT * FROM new_arrival where price > 101";
$result = mysqli_query($con,$sql);
}
else if ($q=='50gm')
{
$sql="SELECT * FROM new_arrival where quantity LIKE '50gm%' or quantity LIKE '500%'";
$result = mysqli_query($con,$sql);
}
else if ($q=='1kg')
{
$sql="SELECT * FROM new_arrival where  quantity like '%kg%' ";
$result = mysqli_query($con,$sql);
}
else if ($q=='oth')
{
$sql="SELECT * FROM new_arrival where quantity LIKE '1 p%' or quantity LIKE '25 p%'";
$result = mysqli_query($con,$sql);
}
echo "<table  id='tab' cellpadding='10' cellspacing='8' >";

$k=0;
while($row = mysqli_fetch_array($result))
 {
 if($k%4==0)
  echo "<tr>";
  echo"<td>";echo"<a href='".$row['link']."' style='text-decoration:none'>";
  echo'<img id="imgBox" width="150px" height="150px" src='.'"Pj/new arrivals/'.$row['img_name'].'"'.">";echo"</a>";
 echo "<br>";
 echo"<a href='".$row['link']."' style='text-decoration:none'>";echo"<strong>";echo $row['product_name'];echo"</strong>";echo"</a>";echo "<br>";
  echo"Rs: ";echo $row['price'];echo "<br>";
  echo"Type:"; echo $row['type'];echo "<br>";
  echo"Quantity:"; echo $row['quantity'];
 echo"</td>";
++$k;
}
echo "</tr>";
echo "</table>";

mysqli_close($con);
?>
<link type="text/css" href="effects.css" rel="stylesheet" />