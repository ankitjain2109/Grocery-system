<?php
$q = strval(($_GET['q']));
$con = mysqli_connect('localhost','root','');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}
mysqli_select_db($con,"minor");

if ($q=='popularity')
{
$sql="SELECT * FROM hair_removal";
$result = mysqli_query($con,$sql);
}
else if ($q=='pricehightolow')
{
$sql="SELECT * FROM hair_removal ORDER BY price DESC";
$result = mysqli_query($con,$sql);
}

else if ($q=='pricelowtohigh')
{
$sql="SELECT * FROM hair_removal ORDER BY price ASC";
$result = mysqli_query($con,$sql);
}
else if ($q=='alphabetical')
{
$sql="SELECT * FROM hair_removal ORDER BY h_name";
$result = mysqli_query($con,$sql);
}

else if ($q=='between50and75')
{
$sql="SELECT * FROM hair_removal where price between 50 and 75";
$result = mysqli_query($con,$sql);
}
else if ($q=='between75and100')
{
$sql="SELECT * FROM hair_removal where price between 75 and 100";
$result = mysqli_query($con,$sql);
}
else if ($q=='between100and500')
{
$sql="SELECT * FROM hair_removal where price > 100";
$result = mysqli_query($con,$sql);
}
else if ($q=='20gm')
{
$sql="SELECT * FROM hair_removal where quantity LIKE '25 gm%' or quantity LIKE '20 pcs%' ";
$result = mysqli_query($con,$sql);
}
else if ($q=='50gm')
{
$sql="SELECT * FROM hair_removal where  quantity like '60 gm' ";
$result = mysqli_query($con,$sql);
}
echo "<table  id='tab' cellpadding='10' cellspacing='8' >";

$k=0;
while($row = mysqli_fetch_array($result))
 {
 if($k%4==0)
  echo "<tr>";
  echo"<td>";echo"<a href='http://www.google.com' style='text-decoration:none'>";
  echo'<img id="imgBox" width="150px" height="150px" src='.'"Pj/hair removal/'.$row['img_name'].'"'.">";echo"</a>";
 echo "<br>"; echo"FRESH:";
 echo"<a href='http://www.google.com' style='text-decoration:none'>";echo"<strong>";echo $row['h_name'];echo"</strong>";echo"</a>";echo "<br>";
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