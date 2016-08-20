<?php
$q = strval(($_GET['q']));
$con = mysqli_connect('localhost','root','');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}
mysqli_select_db($con,"minor");

if ($q=='popularity')
{
$sql="SELECT * FROM masala_spices";
$result = mysqli_query($con,$sql);
}
else if ($q=='pricehightolow')
{
$sql="SELECT * FROM masala_spices ORDER BY price DESC";
$result = mysqli_query($con,$sql);
}

else if ($q=='pricelowtohigh')
{
$sql="SELECT * FROM masala_spices ORDER BY price ASC";
$result = mysqli_query($con,$sql);
}
else if ($q=='alphabetical')
{
$sql="SELECT * FROM masala_spices ORDER BY ms_name";
$result = mysqli_query($con,$sql);
}

else if ($q=='between21and50')
{
$sql="SELECT * FROM masala_spices where price between 21 and 50";
$result = mysqli_query($con,$sql);
}
else if ($q=='between51and100')
{
$sql="SELECT * FROM masala_spices where price between 51 and 100";
$result = mysqli_query($con,$sql);
}
else if ($q=='between101and200')
{
$sql="SELECT * FROM masala_spices where price > 101";
$result = mysqli_query($con,$sql);
}
else if ($q=='100gm')
{
$sql="SELECT * FROM masala_spices where quantity LIKE '100gm%'";
$result = mysqli_query($con,$sql);
}
else if ($q=='200gm')
{
$sql="SELECT * FROM masala_spices where quantity LIKE '200gm%'";
$result = mysqli_query($con,$sql);
}
else if ($q=='250gm')
{
$sql="SELECT * FROM masala_spices where quantity LIKE '250gm%'";
$result = mysqli_query($con,$sql);
}
else if ($q=='300gm')
{
$sql="SELECT * FROM masala_spices where quantity LIKE '300gm%'";
$result = mysqli_query($con,$sql);
}
else if ($q=='350gm')
{
$sql="SELECT * FROM masala_spices where quantity LIKE '350gm%'";
$result = mysqli_query($con,$sql);
}
else if ($q=='40gm')
{
$sql="SELECT * FROM masala_spices where quantity like '20gm%' or quantity like '40gm%' or quantity like '50gm%'";
$result = mysqli_query($con,$sql);
}

echo "<table  id='tab' cellpadding='10' cellspacing='8' >";

$k=0;
while($row = mysqli_fetch_array($result))
 {
 if($k%4==0)
  echo "<tr>";
  echo"<td>";echo"<a href='http://www.google.com' style='text-decoration:none'>";
  echo'<img id="imgBox" width="150px" height="150px" src='.'"Pj/masala and spices/'.$row['img_name'].'"'.">";echo"</a>";
 echo "<br>"; echo"FRESH:";
 echo"<a href='http://www.google.com' style='text-decoration:none'>";echo"<strong>";echo $row['ms_name'];echo"</strong>";echo"</a>";echo "<br>";
  echo"Rs: ";echo $row['price'];echo "<br>";
  echo"Quantity:"; echo $row['quantity'];
 echo"</td>";
++$k;
}
echo "</tr>";
echo "</table>";

mysqli_close($con);
?>
<link type="text/css" href="effects.css" rel="stylesheet" />