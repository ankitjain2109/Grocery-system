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

echo "<table border='1' >
<tr>
<th>Image</th>
<th>Name</th>
<th>Price</th>
<th>Quantity</th>
</tr>";

while($row = mysqli_fetch_array($result))
 {
 
  echo "<tr>";
  echo"<td>";
  echo'<img src='.'"Pj/cut_vegetables/'.$row['img_name'].'"'.">";
 echo "</td>";
  echo "<td>" . $row['veg_name'] . "</td>";
  echo "<td>" . $row['price'] . "</td>";
  echo "<td>" . $row['quantity'] . "</td>";
 
  echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>