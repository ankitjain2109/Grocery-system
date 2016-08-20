<?php
session_start();  
mysql_connect("localhost","root","");
mysql_select_db("minor");

if(isset($_REQUEST['srchbutton']))
{
$search_value =$_REQUEST['search'];
//echo "<font face=\"segoe UI Light\"> search results for <b> $search_value</b></font>";
//print  "<br>";
if(strlen($search_value)>1)
{
$query ="select * from search_item where keyword like '%$search_value%'";
$run = mysql_query($query);
while($row=mysql_fetch_array($run)){
$link =$row['link'];
header("Location:".$link);
}
}
else
echo "<script>alert('Enter valid item')</script>";

}
?>


