<?php

include "search.php"; 
 
$log=$_REQUEST['log'];
if($log=="logout")
{
	unset($_SESSION['sid']);
	header("location:main.php");
}
$uid=$_SESSION['sid'];

?>

<?php
mysql_connect("localhost","root","");
mysql_select_db("minor") or die(mysql_error());

$a=range("a","z");
$b=range(0,9);
$c=range("A","Z");
$d=range(0,9);
$e=range("a","z");
//$style=array("Adobe Caslon Pro Bold","Bradley Hand ITC","Brush Script MT","Brush Script Std","Viner Hand ITC","Arial");

$aa=array_rand($a);
$bb=array_rand($b);
$cc=array_rand($c);
$dd=array_rand($d);
$ee=array_rand($e);
//$font=array_rand($style);

$abc= $a[$aa].$b[$bb].$c[$cc].$d[$dd].$e[$ee];

$email2=$_REQUEST['email2'];
$confirmation=$_REQUEST['confirmation'];
if($_REQUEST['forgot_password'])
{
	if($email2=="" or $confirmation=="")
	{
		echo "<script>alert(' Enter Id and Answer')</script>";
	}
	else
	{
		$sql=mysql_query("select secret_ques from registration where email='$email2'");
		$res=mysql_fetch_array($sql);
		if($res['secret_ques']==$confirmation)
		{
			
			$change="UPDATE registration SET password = '$abc',conf_password='$abc' WHERE email = '$email2'";
			$result=mysql_query($change);
			if(!$result)
			die(mysql_error());
			else
			$new_password= "your password has been changed to '$abc'";
			//mysql_query("UPDATE table registration SET password = '$abc' && conf_password='$abc' WHERE email = '$email2'");
			
		}
		else
		{	
			echo "<script>alert('Id and Answer didn't match')</script>";
		}
	}
}
?>


<title>Daily Needs</title>
<script language="JavaScript">
<!--
function mmLoadMenus() {
  if (window.mm_menu_1004165716_0) return;
    window.mm_menu_1004165716_0_1 = new Menu("Timings",160,21,"Times New Roman, Times, serif",15,"#000000","#FFFFFF","#FBF9F7","#3366FF","left","middle",3,0,1000,-5,7,true,true,true,0,true,true);
    mm_menu_1004165716_0_1.addMenuItem("7:00AM&nbsp;to&nbsp;9:30AM");
    mm_menu_1004165716_0_1.addMenuItem("9:30AM&nbsp;to&nbsp;12:30PM");
    mm_menu_1004165716_0_1.addMenuItem("5:00PM&nbsp;to&nbsp;7:30PM&nbsp;");
    mm_menu_1004165716_0_1.addMenuItem("7:30PM&nbsp;to&nbsp;10:00PM");
     mm_menu_1004165716_0_1.fontStyle="italic";
     mm_menu_1004165716_0_1.hideOnMouseOut=true;
     mm_menu_1004165716_0_1.bgColor='#FFFFFF';
     mm_menu_1004165716_0_1.menuBorder=1;
     mm_menu_1004165716_0_1.menuLiteBgColor='#FCFBF9';
     mm_menu_1004165716_0_1.menuBorderBgColor='#000000';
  window.mm_menu_1004165716_0 = new Menu("root",114,21,"Times New Roman, Times, serif",15,"#000000","#FFFFFF","#FBF9F7","#3366FF","left","middle",3,0,1000,-5,7,true,true,true,0,true,true);
  mm_menu_1004165716_0.addMenuItem("Delivery&nbsp;Slots");
  mm_menu_1004165716_0.addMenuItem(mm_menu_1004165716_0_1);
  mm_menu_1004165716_0.addMenuItem("Login");
  mm_menu_1004165716_0.addMenuItem("Register");
   mm_menu_1004165716_0.fontStyle="italic";
   mm_menu_1004165716_0.hideOnMouseOut=true;
   mm_menu_1004165716_0.childMenuIcon="arrows.gif";
   mm_menu_1004165716_0.bgColor='#FDFBFA';
   mm_menu_1004165716_0.menuBorder=1;
   mm_menu_1004165716_0.menuLiteBgColor='#FCFBF9';
   mm_menu_1004165716_0.menuBorderBgColor='#000000';

        window.mm_menu_1004170146_0 = new Menu("root",210,23,"Times New Roman, Times, serif",17,"#000000","#FFFFFF","#FBF9F7","#99CCFF","left","middle",3,0,1000,-5,7,true,true,true,0,false,true);
  mm_menu_1004170146_0.addMenuItem("Why&nbsp;Daily&nbsp;Needs?");
  mm_menu_1004170146_0.addMenuItem("Daily&nbsp;Needs&nbsp;in&nbsp;the&nbsp;Media");
  mm_menu_1004170146_0.addMenuItem("Frequently&nbsp;Asked&nbsp;Questions.");
  mm_menu_1004170146_0.addMenuItem("Customer&nbsp;Speak");
   mm_menu_1004170146_0.fontStyle="italic";
   mm_menu_1004170146_0.hideOnMouseOut=true;
   mm_menu_1004170146_0.bgColor='#FDFBFA';
   mm_menu_1004170146_0.menuBorder=1;
   mm_menu_1004170146_0.menuLiteBgColor='#FCFBF9';
   mm_menu_1004170146_0.menuBorderBgColor='#000000';

mm_menu_1004170146_0.writeMenus();
} // mmLoadMenus()
//-->
</script>
<link rel="stylesheet" href="effects.css" type="text/css">

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

<form method="post" enctype="multipart/form-data" action="forgotpass.php">
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


<table align="center" bgcolor="#FFFFFF" width="75%"  class="image1">
<tr>
<th></th><th><a href="main.php"><img src="Pj/admin/logo.jpg" align="middle" class="image2" style="size:landscape; height: 125px; width:240px"/></a></th>&nbsp;&nbsp;&nbsp;&nbsp;<th><input type="text" name="search" class="image2" width="300px" height="200px" size="+60" placeholder="&nbsp;&nbsp;&nbsp;Search your needs" style="border-radius:8px; height:25px; width:500px";/></th>&nbsp;&nbsp;&nbsp;&nbsp;<th><input type="submit" name="srchbutton" value="SEARCH" class="image2" style="height:25px; width:80px"/></th>&nbsp;&nbsp;&nbsp;<th style="background-color:#f5f4f4"><span><a href="view_cart.php" style="text-decoration:none">Your Basket Has <?php echo $_SESSION['count']; ?> Item<br> <img src="Pj/bskt.jpg" height="36px"/> </span>
</a>
</th>
</tr>
</table>

<table width="80%" height="480px" vspace="15px" align="center" class="image1" style="background-color:#E4E3E6">

	<tr height="40px" align="center">
	  <th width="9%" rowspan="3"></th>
	  <th height="59" colspan="2"></th>
	  <th width="15%" rowspan="3"></th>
  </tr>
	<tr height="350px" align="center">
	  <th width="70%" class="effectscale image1" valign="middle" align="center" style="box-shadow:0px 0px 10px #979393">
	 <p> <h3 align="left">FORGOT PASSWORD</h3></p>
	 <p align="center">Email Id </p>
	 <p align="center"><input type="text" name="email2" placeholder="Enter your email id" style="width:210px; height:25px; border-radius:7px;"/></p>
	 <p align="center">Enter The Name Of Your First High School / First Pet name / Your Father Name</p>
	 <p align="center"><input type="text" name="confirmation" hspace="61px" placeholder="Enter the Secret answer" style="width:210px; height:25px; border-radius:7px;"/></p>
	 <p align="center"><input type="submit" name="forgot_password" style="height:20px; width:60px"/></p>
	 <p align="center"><?php echo " $new_password "; ?></p>
	
	</th>
	</tr>
</table>


	<table vspace="10px" width="100%" height="100px">
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
