<?php
include"search.php";
$log=$_REQUEST['log'];
if($log=="logout")
{
unset($_SESSION['count']);
	unset($_SESSION['products']);
	unset($_SESSION['sid']);
	echo"<script>window.location.assign('main.php')</script>";
	//header("location:main.php");
}
$uid=$_SESSION['sid'];

?>


<?php
mysql_connect("localhost","root","");
mysql_select_db("minor") or die(mysql_error());

?>


<!DOCTYPE html>
<head>
<title>Daily Needs</title>
<script language="JavaScript">
<!--
function mmLoadMenus() {
  if (window.mm_menu_1004165716_0) return;
    window.mm_menu_1004165716_0_1 = new Menu("Timings",278,24,"Arial, Helvetica, sans-serif",18,"#000000","#FFFFFF","#8FB242","#E61E2A","left","middle",3,0,1000,-5,7,true,true,true,0,false,true);
    mm_menu_1004165716_0_1.addMenuItem("7:00AM&nbsp;to&nbsp;9:30AM");
    mm_menu_1004165716_0_1.addMenuItem("9:30AM&nbsp;to&nbsp;12:30PM");
    mm_menu_1004165716_0_1.addMenuItem("5:00PM&nbsp;to&nbsp;7:30PM&nbsp;");
    mm_menu_1004165716_0_1.addMenuItem("7:30PM&nbsp;to&nbsp;10:00PM");
     mm_menu_1004165716_0_1.fontWeight="bold";
     mm_menu_1004165716_0_1.hideOnMouseOut=true;
     mm_menu_1004165716_0_1.bgColor='#FDFBFA';
     mm_menu_1004165716_0_1.menuBorder=1;
     mm_menu_1004165716_0_1.menuLiteBgColor='#FCFBF9';
     mm_menu_1004165716_0_1.menuBorderBgColor='#000000';
 window.mm_menu_1004165716_0 = new Menu("root",278,24,"Arial, Helvetica, sans-serif",18,"#000000","#FFFFFF","#8FB242","#E61E2A","left","middle",3,0,1000,-5,7,true,true,true,0,false,true);
  mm_menu_1004165716_0.addMenuItem("Delivery&nbsp;Slots");
  mm_menu_1004165716_0.addMenuItem(mm_menu_1004165716_0_1);
  
   mm_menu_1004165716_0.fontWeight="bold";
   mm_menu_1004165716_0.hideOnMouseOut=true;
   mm_menu_1004165716_0.childMenuIcon="arrows.gif";
   mm_menu_1004165716_0.bgColor='#FDFBFA';
   mm_menu_1004165716_0.menuBorder=1;
   mm_menu_1004165716_0.menuLiteBgColor='#FCFBF9';
   mm_menu_1004165716_0.menuBorderBgColor='#000000';

      window.mm_menu_1004170146_0 = new Menu("root",277,23,"Arial, Helvetica, sans-serif",17,"#000000","#FFFFFF","#8FB242","#E61E2A","left","middle",3,0,1000,-5,7,true,true,true,0,false,true);
  mm_menu_1004170146_0.addMenuItem("Why&nbsp;Daily&nbsp;Needs?");
  mm_menu_1004170146_0.addMenuItem("Daily&nbsp;Needs&nbsp;in&nbsp;the&nbsp;Media");
  mm_menu_1004170146_0.addMenuItem("Frequently&nbsp;Asked&nbsp;Questions.");
  mm_menu_1004170146_0.addMenuItem("Customer&nbsp;Speak");
   mm_menu_1004170146_0.fontWeight="bold";
   mm_menu_1004170146_0.hideOnMouseOut=true;
   mm_menu_1004170146_0.bgColor='#FDFBFA';
   mm_menu_1004170146_0.menuBorder=1;
   mm_menu_1004170146_0.menuLiteBgColor='#FCFBF9';
   mm_menu_1004170146_0.menuBorderBgColor='#000000';

mm_menu_1004170146_0.writeMenus();
} // mmLoadMenus()
//-->
</script>
<script language="JavaScript" src="mm_menu.js"></script>
<link rel="stylesheet" type="text/css" href="effects.css">
<script>
function startTime() {
    var today=new Date();
    var h=today.getHours();
    var m=today.getMinutes();
    var s=today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('date').innerHTML ="Time :    "+ h+":"+m+":"+s;
    var t = setTimeout(function(){startTime()},500);
}

function checkTime(i) {
    if (i<10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}
</script>
<style>
#loc
{
width:10%;
float:left;
height:44px;
}
#slots
{
width:25%;
height:44px;
padding:0px;
margin:0px;
float:left;
}
#a
{
width:65%;
height:44px;
padding:0px;
margin:0px;
float:right;
}

</style>
</head>
<body style="background-color:#f2f2f2;" onLoad="startTime()">
<form method="post" enctype="multipart/form-data" action="account.php">
<script language="JavaScript1.2">mmLoadMenus();</script>
<div id="header" style="height:36px;width:100%; background-color:#ededed;" >
  <div id="loc"><marquee direction="left" ><img src="Pj/img8.jpg"></marquee></div>
  <div id="slots"><a name="link14" id="link1" onMouseOver="MM_showMenu(window.mm_menu_1004165716_0,0,19,null,'link14')" onMouseOut="MM_startTimeout();"><div class="shadow-radial" id="box1">Check our Delivery Slots</div></a></div>
  <div class="text1" style="font-size:16px;">Free delivery for orders > Rs1000&nbsp;&nbsp;&nbsp;
 <a name="link13" id="link2" onMouseOver="MM_showMenu(window.mm_menu_1004170146_0,170,16,null,'link13')" onMouseOut="MM_startTimeout();">NEW TO DAILY NEEDS?</a>
 &nbsp;&nbsp;&nbsp;
 
 
 <?php
 if(isset($_SESSION['sid']))
{
 echo 'Welcome : '; echo "<a href='account.php'>"; echo $_SESSION['sid']; echo "</a>"; echo ' &nbsp;&nbsp;&nbsp;<a href="account.php?log=logout" style="color:#FF0000; text-decoration:none"class="pulse-shrink" ><div id="box" class="shadow-radial">Logout</div></a>';
}else{
echo '<a href="login.php" style="color:#FF0000; text-decoration:none"class="pulse-shrink" ><div id="box" class="shadow-radial">Login</div></a> |&nbsp;
 <a href="register.php" style="color:#FF0000;text-decoration:none" class="pulse-shrink"><div id="box" class="shadow-radial">Register</div></a>';
}

?> 

 
   </div>
</div>

<table align="center" bgcolor="#FFFFFF" width="77%"  class="image1">
<tr>
<th></th><th><a href="main.php"><img src="Pj/admin/logo.jpg" align="middle" class="image2" style="size:landscape; height: 125px; width:240px"/></a></th>&nbsp;&nbsp;&nbsp;&nbsp;<th><input type="text" name="search" class="image2" width="300px" height="200px" size="+60" placeholder="&nbsp;&nbsp;&nbsp;Search your needs" style="border-radius:8px; height:25px; width:500px";/></th>&nbsp;&nbsp;&nbsp;&nbsp;<th><input type="submit" name="srchbutton" value="SEARCH" class="image2" style="height:25px; width:80px"/></th>&nbsp;&nbsp;&nbsp;<th style="background-color:#f5f4f4"><a href="view_cart.php" style="text-decoration:none">Your Basket<?php echo $_SESSION['count']; ?> Item<br> <img src="Pj/bskt.jpg" height="36px"/> </span>
</a></th>
</tr>
</table></form>
</table>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


<table width="75%" height="467" class="image1" border="2px" align="center" class="image1" >

	<tr>
	  <th width="21%" rowspan="2" align="left" hspace="10px">
	  <h2 align="center">MY ACCOUNT</h2>
      <p></p>
	  <br>
      <p align="left">  
      <h4><a href="account.php?con=personal_details" class="pulse-shrink" style="text-decoration:none; color:#7D7D7D"><div style="width:150px" id="box" class="shadow-radial">Personal Details</div></a></h4>
      <p></p>
      <p align="left">  
      <h5>&nbsp;&nbsp;&nbsp;-<a href="account.php?con=profile" class="pulse-shrink" style="text-decoration:none; color:#7D7D7D"><div style="width:130px" id="box" class="shadow-radial">&nbsp;&nbsp;Edit Profile</div></a></h5>
      <p></p>
      <p align="left">  
      <h5>&nbsp;&nbsp;&nbsp;-<a href="account.php?con=change_pwd" class="pulse-shrink" style="text-decoration:none; color:#7D7D7D"><div style="width:130px" id="box" class="shadow-radial">&nbsp;&nbsp;Change Password</div></a></h5>
      <p></p>
      <p align="left">  
      <h5>&nbsp;&nbsp;&nbsp;-<a href="account.php?con=delivery_address" class="pulse-shrink" style="text-decoration:none; color:#7D7D7D"><div style="width:130px" id="box" class="shadow-radial">&nbsp;&nbsp;Delivery Address</div></a></h5>
      <p></p>
      <p align="left">  
      <h5>&nbsp;&nbsp;&nbsp;-<a href="account.php?con=delivery_pin" class="pulse-shrink" style="text-decoration:none; color:#7D7D7D"><div style="width:135px" id="box" class="shadow-radial">&nbsp;&nbsp;Change Delivery Pin</div></a></h5>
      <p></p>
        <p align="left">  
      <h4><a href="account.php?con=my_orders" class="pulse-shrink" style="text-decoration:none; color:#7D7D7D"><div style="width:130px" id="box" class="shadow-radial">My Orders</div></a></h4>
      <p></p>
      <p align="left">  
      <h4><a href="account.php?con=refer_friend" class="pulse-shrink" style="text-decoration:none; color:#7D7D7D"><div style="width:200px" id="box" class="shadow-radial">Refer friends to DailyNeeds</div></a></h4>
      <p></p>
      <p align="left">  
      <h4><a href="account.php?con=locate_map" class="pulse-shrink" style="text-decoration:none; color:#7D7D7D"><div style="width:130px" id="box" class="shadow-radial">Locate On Map</div></a></h4>
      <p></p>
	  <p align="left">  
      <h4><a href="map_api.php" class="pulse-shrink" style="text-decoration:none; color:#7D7D7D"><div style="width:200px; font-size:15px" id="box" class="shadow-radial">Locate Your Nearest Store</div></a></h4>
      <p></p>
	   <p align="left">  
      <h4><a href="address_shop.php" class="pulse-shrink" style="text-decoration:none; color:#7D7D7D"><div style="width:200px; font-size:15px" id="box" class="shadow-radial">Address of Nearest Store</div></a></h4>
      <p></p>
	  
	  <a href="account.php?log=logout" class="pulse-shrink" ><div id="box" class="shadow-radial">Logout</div></a>
	  </th>
	  <th id="date" height="85" align="right" valign="bottom"></th>
    </tr>
	<tr>
	  <th width="79%" >
	  
	  <?php
		$con=$_REQUEST['con'];
		if($con=="personal_details")
		{
			include("personal_details.php");
		}
		
		if($con=="profile")
		{
			include("profile.php");
		}
		
		if($con=="change_pwd")
		{
			include("change_pwd.php");
		}	
			
		if($con=="delivery_address")
		{
			include("delivery_address.php");
		}
		if($con=="delivery_pin")
		{
			include("delivery_pin.php");
		}		
		if($con=="my_orders")
		{
			include("my_orders.php");
		}			
		if($con=="refer_friend")
		{
			include("refer_friend.php");
		}	
		if($con=="locate_map")
		{
			include("locate_map.php");
		}
		/*if($con=="map")
		{
			include("map_api.php");
		}*/
					
	?>
	

<!----- Display Delivery address And Edit -->

<?php
$house=$_REQUEST['house'];
$address=$_REQUEST['address'];
$place=$_REQUEST['place'];
$state=$_REQUEST['state'];
if($_REQUEST['update'])
	{
	$sql=mysql_query("update registration set house_no='$house', place='$place', address='$address', state='$state' where email='$uid'");
	echo "update successfull";
	}
	
?>
<!----- Display Delivery Pin And Edit -->
<?php
$pincode=$_REQUEST['pincode'];
if($_REQUEST['update_pin'])
	{
	$sql=mysql_query("update registration set pincode='$pincode' where email='$uid'");
	echo "update successfull";
	}
?>

<!--Profile Edit-->

<?php
$first_name=$_REQUEST['first_name'];
$last_name=$_REQUEST['last_name'];
$salutation=$_REQUEST['salutation'];
$dob=$_REQUEST['dob'];
$mob_no=$_REQUEST['mob_no'];
$secret_ques=$_REQUEST['secret_ques'];

if($_REQUEST['update_profile'])
	{
	$sql=mysql_query("update registration set first_name='$first_name', last_name='$last_name', salutation='$salutation', dob='$dob', mob_no='$mob_no', secret_ques='$secret_ques' where email='$uid'");
	echo "update successfull";
	}
?>


	
<!--Change Password-->


<?php
$opwd=$_REQUEST['opwd'];
$npwd=$_REQUEST['npwd'];
$cpwd=$_REQUEST['cpwd'];
if($_REQUEST['chg_pwd'])
{
	if($opwd=="")
	{
		echo "<script>alert('Enter Old Password')</script>";
	}
	else
	{
	 $sql=mysql_query("select * from registration where email='$uid'");
		$res=mysql_fetch_array($sql);
		if($res['password']==$opwd)
	  {
	  		if($npwd==$cpwd)
				{
mysql_query("update registration set password='$npwd',conf_password='$npwd' where email='$uid'");
					echo "<script>alert(' Password Changed')</script>";
				}
				else
				{
				
				echo "<script>alert('Confirm Password Not match')</script>";	
				}
	  }
	  else
	  {
	  echo "<script>alert('Old Password Not match')</script>";
	  
	  }
	
	}
	
}
?>
	
	  
	  </th>
	</tr>
</table>

<p align="center" style="width:75%">

<?php
if($_REQUEST['locate'])
{
include("map_google.php");
}

if($_REQUEST['locate_on_google'])
{
	include("map_google.php");
}

?>
</p>
<table align="center" vspace="1px" width="75%" height="100%" style="background-color:#CCCCFF">
	<tr>
	<td>
		<?php
		include ("footer.php");
		
		?>
</td>
</tr>
</table>





</form>
</body>
</html>
