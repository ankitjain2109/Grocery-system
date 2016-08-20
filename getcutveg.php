<?php
$q = strval(($_GET['q']));
$con = mysqli_connect('localhost','root','');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}
mysqli_select_db($con,"minor");

if ($q=='popularity')
{
$sql="SELECT * FROM cut_vegetables";
$result = mysqli_query($con,$sql);
}
else if ($q=='pricehightolow')
{
$sql="SELECT * FROM cut_vegetables ORDER BY price DESC";
$result = mysqli_query($con,$sql);
}

else if ($q=='pricelowtohigh')
{
$sql="SELECT * FROM cut_vegetables ORDER BY price ASC";
$result = mysqli_query($con,$sql);
}
else if ($q=='alphabetical')
{
$sql="SELECT * FROM cut_vegetables ORDER BY veg_name";
$result = mysqli_query($con,$sql);
}

else if ($q=='between21and50')
{
$sql="SELECT * FROM cut_vegetables where price between 21 and 50";
$result = mysqli_query($con,$sql);
}
else if ($q=='between51and100')
{
$sql="SELECT * FROM cut_vegetables where price between 51 and 100";
$result = mysqli_query($con,$sql);
}
else if ($q=='between101and200')
{
$sql="SELECT * FROM cut_vegetables where price between 101 and 250";
$result = mysqli_query($con,$sql);
}
else if ($q=='100gm')
{
$sql="SELECT * FROM cut_vegetables where quantity ='100 gm'";
$result = mysqli_query($con,$sql);
}
else if ($q=='200gm')
{
$sql="SELECT * FROM cut_vegetables where quantity ='200 gm-tra'";
$result = mysqli_query($con,$sql);
}
else if ($q=='250gm')
{
$sql="SELECT * FROM cut_vegetables where quantity ='250 gm'";
$result = mysqli_query($con,$sql);
}
else if ($q=='300gm')
{
$sql="SELECT * FROM cut_vegetables where quantity ='300 gm'";
$result = mysqli_query($con,$sql);
}
else if ($q=='350gm')
{
$sql="SELECT * FROM cut_vegetables where quantity ='350gm' or quantity='350 gm'";
$result = mysqli_query($con,$sql);
}
else if ($q=='400gm')
{
$sql="SELECT * FROM cut_vegetables where quantity ='400 gm'";
$result = mysqli_query($con,$sql);
}

echo "<table  id='tab' cellpadding='10' cellspacing='8' >";

$k=0;
while($row = mysqli_fetch_array($result))
 {
 if($k%4==0)
  echo "<tr>";
  echo"<td>";echo"<a href='".$row['link']."' style='text-decoration:none'>";
  echo'<img id="imgBox" src='.'"Pj/cut_vegetables/'.$row['img_name'].'"'.">";echo"</a>";
 echo "<br>"; echo"FRESH:";
 echo"<a href='".$row['link']."' style='text-decoration:none'>";echo"<strong>";echo $row['veg_name'];echo"</strong>";echo"</a>";echo "<br>";
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