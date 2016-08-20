<?php
$q = strval(($_GET['q']));
$con = mysqli_connect('localhost','root','');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}
mysqli_select_db($con,"minor");

if ($q=='popularity')
{
$sql="SELECT * FROM skin_care";
$result = mysqli_query($con,$sql);
}
else if ($q=='pricehightolow')
{
$sql="SELECT * FROM skin_care ORDER BY price DESC";
$result = mysqli_query($con,$sql);
}

else if ($q=='pricelowtohigh')
{
$sql="SELECT * FROM skin_care ORDER BY price ASC";
$result = mysqli_query($con,$sql);
}
else if ($q=='alphabetical')
{
$sql="SELECT * FROM skin_care ORDER BY sc_name";
$result = mysqli_query($con,$sql);
}

else if ($q=='between50and100')
{
$sql="SELECT * FROM skin_care where price between 50 and 100";
$result = mysqli_query($con,$sql);
}
else if ($q=='between100and500')
{
$sql="SELECT * FROM skin_care where price between 100 and 500";
$result = mysqli_query($con,$sql);
}
else if ($q=='between500and1000')
{
$sql="SELECT * FROM skin_care where price > 500";
$result = mysqli_query($con,$sql);
}
else if ($q=='5gm')
{
$sql="SELECT * FROM skin_care where quantity LIKE '9 gm%' or quantity LIKE '25 gm%' ";
$result = mysqli_query($con,$sql);
}
else if ($q=='others')
{
$sql="SELECT * FROM skin_care where  quantity like '300 ml' or quantity LIKE '%pc'";
$result = mysqli_query($con,$sql);
}




echo "<table  id='tab' cellpadding='10' cellspacing='8' >";

$k=0;
while($row = mysqli_fetch_array($result))
 {
 if($k%4==0)
  echo "<tr>";
  echo"<td>";echo"<a href='http://www.google.com' style='text-decoration:none'>";
  echo'<img id="imgBox" width="150px" height="150px" src='.'"Pj/skin care/'.$row['img_name'].'"'.">";echo"</a>";
 echo "<br>"; echo"FRESH:";
 echo"<a href='http://www.google.com' style='text-decoration:none'>";echo"<strong>";echo $row['sc_name'];echo"</strong>";echo"</a>";echo "<br>";
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