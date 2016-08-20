<?php
$q = strval(($_GET['q']));
$con = mysqli_connect('localhost','root','');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}
mysqli_select_db($con,"minor");

if ($q=='popularity')
{
$sql="SELECT * FROM eyecare_kajal";
$result = mysqli_query($con,$sql);
}
else if ($q=='pricehightolow')
{
$sql="SELECT * FROM eyecare_kajal ORDER BY price DESC";
$result = mysqli_query($con,$sql);
}

else if ($q=='pricelowtohigh')
{
$sql="SELECT * FROM eyecare_kajal ORDER BY price ASC";
$result = mysqli_query($con,$sql);
}
else if ($q=='alphabetical')
{
$sql="SELECT * FROM eyecare_kajal ORDER BY k_name";
$result = mysqli_query($con,$sql);
}

else if ($q=='between50and100')
{
$sql="SELECT * FROM eyecare_kajal where price between 50 and 100";
$result = mysqli_query($con,$sql);
}
else if ($q=='between100and500')
{
$sql="SELECT * FROM eyecare_kajal where price between 100 and 500";
$result = mysqli_query($con,$sql);
}
else if ($q=='between500and1000')
{
$sql="SELECT * FROM eyecare_kajal where price > 500";
$result = mysqli_query($con,$sql);
}
else if ($q=='1gm')
{
$sql="SELECT * FROM eyecare_kajal where quantity LIKE '0.35 gm%' ";
$result = mysqli_query($con,$sql);
}
else if ($q=='2gm')
{
$sql="SELECT * FROM eyecare_kajal where  quantity like '2.7 gm' ";
$result = mysqli_query($con,$sql);
}
else if ($q=='3gm')
{
$sql="SELECT * FROM eyecare_kajal where quantity LIKE '3.5 gm%' ";
$result = mysqli_query($con,$sql);
}
else if ($q=='4gm')
{
$sql="SELECT * FROM eyecare_kajal where quantity LIKE '4 gm%' ";
$result = mysqli_query($con,$sql);
}

echo "<table  id='tab' cellpadding='10' cellspacing='8' >";

$k=0;
while($row = mysqli_fetch_array($result))
 {
 if($k%4==0)
  echo "<tr>";
  echo"<td>";echo"<a href='http://www.google.com' style='text-decoration:none'>";
  echo'<img id="imgBox" width="150px" height="150px" src='.'"Pj/eye care $ kajal/'.$row['img_name'].'"'.">";echo"</a>";
 echo "<br>"; echo"FRESH:";
 echo"<a href='http://www.google.com' style='text-decoration:none'>";echo"<strong>";echo $row['k_name'];echo"</strong>";echo"</a>";echo "<br>";
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