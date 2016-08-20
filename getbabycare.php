<?php
$q = strval(($_GET['q']));
$con = mysqli_connect('localhost','root','');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}
mysqli_select_db($con,"minor");

if ($q=='popularity')
{
$sql="SELECT * FROM baby_care";
$result = mysqli_query($con,$sql);
}
else if ($q=='pricehightolow')
{
$sql="SELECT * FROM baby_care ORDER BY price DESC";
$result = mysqli_query($con,$sql);
}

else if ($q=='pricelowtohigh')
{
$sql="SELECT * FROM baby_care ORDER BY price ASC";
$result = mysqli_query($con,$sql);
}
else if ($q=='alphabetical')
{
$sql="SELECT * FROM baby_care ORDER BY bc_name";
$result = mysqli_query($con,$sql);
}

else if ($q=='between100and200')
{
$sql="SELECT * FROM baby_care where price between 100 and 200";
$result = mysqli_query($con,$sql);
}
else if ($q=='between200and300')
{
$sql="SELECT * FROM baby_care where price between 200 and 300";
$result = mysqli_query($con,$sql);
}
else if ($q=='between300and400')
{
$sql="SELECT * FROM baby_care where price between 300 and 400";
$result = mysqli_query($con,$sql);
}
else if ($q=='100cm')
{
$sql="SELECT * FROM baby_care where specification LIKE '70cm x 100 cm'";
$result = mysqli_query($con,$sql);
}
else if ($q=='50cm')
{
$sql="SELECT * FROM baby_care where specification LIKE '70cm x 50 cm'";
$result = mysqli_query($con,$sql);
}

echo "<table  id='tab' cellpadding='10' cellspacing='8' >";

$k=0;
while($row = mysqli_fetch_array($result))
 {
 if($k%4==0)
  echo "<tr>";
  echo"<td>";echo"<a href='".$row['link']."' style='text-decoration:none'>";
  echo'<img id="imgBox" width="150px" height="150px" src='.'"Pj/baby care/'.$row['img_name'].'"'.">";echo"</a>";
 echo "<br>"; echo"FRESH:";
 echo"<a href='".$row['link']."' style='text-decoration:none'>";echo"<strong>";echo $row['bc_name'];echo"</strong>";echo"</a>";echo "<br>";
  echo"Rs: ";echo $row['price'];echo "<br>";
  echo"Specification:"; echo $row['specification'];
 echo"</td>";
++$k;
}
echo "</tr>";
echo "</table>";

mysqli_close($con);
?>
<link type="text/css" href="effects.css" rel="stylesheet" />