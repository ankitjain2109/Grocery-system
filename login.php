<?php
mysql_connect("localhost","root","");
mysql_select_db("minor") or die(mysql_error());
?>
<?php

session_start();
$email1=$_REQUEST['email1'];
$pwd=$_REQUEST['pwd'];
if($_REQUEST['login'])
{
	if($email1=="" or $pwd=="")
	{
		echo "<script>alert(' Enter Id and Password')</script>";
	}
	else
	{
		$sql=mysql_query("select * from registration where email='$email1' and password='$pwd'");
		$res=mysql_fetch_array($sql);
		if($res['email']==$email1 and $res['password']==$pwd)
		{			
			$_SESSION['sid']=$email1;
			header("location:main.php");
			//$_SESSION['sid']=$email1;
			//header("location:C:\wamp\www\minor\main.php");
			//header('location:main.php');
		}
		else
		{	
			echo "<script>alert('Id and Password Does Not Match')</script>";
		}
	}
}
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
  mm_menu_1004165716_0.addMenuItem("Login","location='login.php'");
  mm_menu_1004165716_0.addMenuItem("Register","location='register.php'");
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
<link rel="stylesheet" type="text/css" href="effects.css">
<script language="JavaScript" src="mm_menu.js"></script>
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
<body style="background-color:#f2f2f2;">

<form method="post" enctype="multipart/form-data" action="login.php">
<script language="JavaScript1.2">mmLoadMenus();</script>
<div id="header" style="height:36px;width:100%; background-color:#ededed;" >
  <div id="loc"><marquee direction="left" ><img src="Pj/img8.jpg"></marquee></div>
  <div id="slots"><a name="link4" id="link1" onMouseOver="MM_showMenu(window.mm_menu_1004165716_0,0,19,null,'link4')" onMouseOut="MM_startTimeout();">
    <div class="shadow-radial" id="box1">Check our Delivery Slots</div></a></div>
  
  <div class="text1" style="font-size:16px;">Free delivery for orders Rs1000 and above&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <a name="link13" id="link2" onMouseOver="MM_showMenu(window.mm_menu_1004170146_0,170,16,null,'link13')" onMouseOut="MM_startTimeout();">NEW TO DAILY NEEDS?</a>
 &nbsp;&nbsp;&nbsp;&nbsp;
 <a href="login.php" style="color:#FF0000; text-decoration:none"class="pulse-shrink" ><div id="box" class="shadow-radial">Login</div></a> |&nbsp;
 <a href="register.php" style="color:#FF0000;text-decoration:none" class="pulse-shrink"><div id="box" class="shadow-radial">Register</div></a>  </div>
</div>


<table align="center" bgcolor="#FFFFFF" width="75%"  class="image1">
<tr>
<th></th><th><a href="main.php"><img src="Pj/admin/logo.jpg" align="middle" class="image2" style="size:landscape; height: 125px; width:240px"/></a></th>&nbsp;&nbsp;&nbsp;&nbsp;<th><input type="text" name="search" class="image2" width="300px" height="200px" size="+60" placeholder="&nbsp;&nbsp;&nbsp;Search your needs" style="border-radius:8px; height:25px; width:500px";/></th>&nbsp;&nbsp;&nbsp;&nbsp;<th><input type="submit" name="srchbutton" value="SEARCH" class="image2" style="height:25px; width:80px"/></th>&nbsp;&nbsp;&nbsp;<th style="background-color:#f5f4f4"><span><a href="view_cart.php" style="text-decoration:none">Your Basket Has <?php echo $_SESSION['count']; ?> Item<br> <img src="Pj/bskt.jpg" height="36px"/> </span>
</a>
</th>
</tr>
</table>



<table width="80%" height="548px" align="center" style="background-color:#E4E3E6" class="image1">

	<tr height="40px" align="center">
	  <th width="9%" rowspan="3"></th>
	  <th height="59" colspan="2"></th>
	  <th width="11%" rowspan="3"></th>
  </tr>
	<tr height="60px" class="effectscale" align="center">
	  <th width="42%" style="box-shadow:0px 0px 10px #979393">
	  <p><h2 align="left"> &nbsp;&nbsp;LOGIN</h2></p>
	  <p><h5 align="left">  &nbsp;&nbsp;&nbsp;&nbsp;please enter your registered email id and password</h5></p>
	    <p align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;EMAIL ID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="email" placeholder="Enter Mail Id" name="email1" /></p>
		<p align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PASSWORD&nbsp;&nbsp;<input type="password" name="pwd" placeholder="Enter Password"/></p>
		<p align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="login" hspace="5px" width="60px" value="Login"/>
	  <a href="main.php"><input type="button" name="home" width="60px" value="Back To Home"/></a>
	  <a href="forgotpass.php"><h4>Forgot Password</h4></a>
	  </p>
	  <p align="center" style="color:#808080"> OR </p>
	  <p align="center" style="color:#808080"> &nbsp;&nbsp;&nbsp;&nbsp; YOU CAN LOGIN WITH GMAIL OR YAHOO</p>
	  <p><input type="button" name="gmail" value="GMAIL" style="color:#001000; font-style:italic; background-color:#C0DCC0; height:25px; width:85px; box-shadow:0px 0px 10px #979393"/>
	  <input type="button" name="yahoo" value="YAHOO" style="color:#001000; font-style:italic; background-color:#C0DCC0; height:25px; width:85px; box-shadow:0px 0px 10px #979393"/></p>
	  
	  Under Construction
	  </th>
	  
	  <th width="38%" style="box-shadow:0px 0px 10px #979393" height="309">
	  <p><h2 align="left"> &nbsp;&nbsp;NEW TO DAILY NEEDS</h2></p>
	  <p align="left"><h3 align="left"> &nbsp;&nbsp;&nbsp;&nbsp;Why register?</h3></p>
<p align="left"><h4 align="left">  &nbsp;&nbsp;&nbsp;&nbsp;- Wide selection of products</h4></p>
<p align="left"><h4 align="left">  &nbsp;&nbsp;&nbsp;&nbsp;- Quality and service you'll love</h4></p>
<p align="left"><h4 align="left">  &nbsp;&nbsp;&nbsp;&nbsp;- On time delivery guarantee</h4></p>
<p align="left"><h4 align="left">  &nbsp;&nbsp;&nbsp;&nbsp;- Shop on the go from Android and iOS devices</h4></p>
<br><br>
<p><a href="register.php"><input type="button" value="Sign Up" name="signup" style="color:#001000; font-style:italic; background-color:#C0DCC0; height:25px; width:85px; box-shadow:0px 0px 10px #979393"/></a></p>
</th>
  </tr>
	<tr height="60px" align="center">
	  <th height="31" colspan="2"></th>
	</tr>
</table>

<table align="center" style="background-color:#CFCFCF" vspace="1px" width="80%" height="100%">
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
