<?php
$q = strval(($_GET['q']));
$con = mysqli_connect('localhost','root','');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}
mysqli_select_db($con,"minor");



 if ($q=='between21and50')
{
$sql="SELECT * FROM mango_juices where price between 21 and 50";
$result = mysqli_query($con,$sql);
}
 if ($q=='between51and100')
{
$sql="SELECT * FROM mango_juices where price between 51 and 100";
$result = mysqli_query($con,$sql);
}
if ($q=='between101and200')
{
$sql="SELECT * FROM mango_juices where price > 101";
$result = mysqli_query($con,$sql);
}
 if ($q=='200gm')
{
$sql="SELECT * FROM mango_juices where quantity LIKE '200%' ";
$result = mysqli_query($con,$sql);
}
 if ($q=='250gm')
{
$sql="SELECT * FROM mango_juices where quantity LIKE '250%'";
$result = mysqli_query($con,$sql);
}

 if ($q=='500gm')
{
$sql="SELECT * FROM mango_juices where quantity LIKE '500%'";
$result = mysqli_query($con,$sql);
}
if ($q=='1000gm')
{
$sql="SELECT * FROM mango_juices where quantity LIKE '%lt%'";
$result = mysqli_query($con,$sql);
}
if ($q=='popularity')
{
$sql="SELECT * FROM mango_juices";
$result = mysqli_query($con,$sql);
}
else if ($q=='pricehightolow')
{
$sql="SELECT * FROM mango_juices ORDER BY price DESC";
$result = mysqli_query($con,$sql);
}

else if ($q=='pricelowtohigh')
{
$sql="SELECT * FROM mango_juices ORDER BY price ASC";
$result = mysqli_query($con,$sql);
}
else if ($q=='alphabetical')
{
$sql="SELECT * FROM mango_juices ORDER BY dr_name";
$result = mysqli_query($con,$sql);
}


echo "<table  id='tab' cellpadding='10' cellspacing='8' >";

$k=0;
while($row = mysqli_fetch_array($result))
 {
 if($k%4==0)
  echo "<tr>";
  echo"<td>";echo"<a href='http://www.google.com' style='text-decoration:none'>";
  echo'<img id="imgBox" width="150px" height="150px" src='.'"Pj/mango juices/'.$row['img_name'].'"'.">";echo"</a>";
 echo "<br>"; echo"FRESH:";
 echo"<a href='http://www.google.com' style='text-decoration:none'>";echo"<strong>";echo $row['j_name'];echo"</strong>";echo"</a>";echo "<br>";
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