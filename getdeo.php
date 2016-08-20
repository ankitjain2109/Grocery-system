<?php
$q = strval(($_GET['q']));
$con = mysqli_connect('localhost','root','');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}
mysqli_select_db($con,"minor");

if ($q=='popularity')
{
$sql="SELECT * FROM deo_perfumes";
$result = mysqli_query($con,$sql);
}
else if ($q=='pricehightolow')
{
$sql="SELECT * FROM deo_perfumes ORDER BY price DESC";
$result = mysqli_query($con,$sql);
}

else if ($q=='pricelowtohigh')
{
$sql="SELECT * FROM deo_perfumes ORDER BY price ASC";
$result = mysqli_query($con,$sql);
}
else if ($q=='alphabetical')
{
$sql="SELECT * FROM deo_perfumes ORDER BY deo_name";
$result = mysqli_query($con,$sql);
}

else if ($q=='between50and100')
{
$sql="SELECT * FROM deo_perfumes where price between 50 and 100";
$result = mysqli_query($con,$sql);
}
else if ($q=='between100and200')
{
$sql="SELECT * FROM deo_perfumes where price between 100 and 200";
$result = mysqli_query($con,$sql);
}
else if ($q=='between200and500')
{
$sql="SELECT * FROM deo_perfumes where price > 200";
$result = mysqli_query($con,$sql);
}
else if ($q=='50ml')
{
$sql="SELECT * FROM deo_perfumes where quantity LIKE '50 ml%'";
$result = mysqli_query($con,$sql);
}

else if ($q=='100ml')
{
$sql="SELECT * FROM deo_perfumes where quantity LIKE '150 ml%'";
$result = mysqli_query($con,$sql);
}

else if ($q=='150ml')
{
$sql="SELECT * FROM deo_perfumes where quantity LIKE '169 ml%'";
$result = mysqli_query($con,$sql);
}
echo "<table  id='tab' cellpadding='10' cellspacing='8' >";

$k=0;
while($row = mysqli_fetch_array($result))
 {
 if($k%4==0)
  echo "<tr>";
  echo"<td>";echo"<a href='".$row['link']."' style='text-decoration:none'>";
  echo'<img id="imgBox" width="150px" height="150px" src='.'"Pj/deo/'.$row['img_name'].'"'.">";echo"</a>";
 echo "<br>"; echo"FRESH:";
 echo"<a href='".$row['link']."' style='text-decoration:none'>";echo"<strong>";echo $row['deo_name'];echo"</strong>";echo"</a>";echo "<br>";
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