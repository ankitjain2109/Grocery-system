
<!DOCTYPE html>

<head>
<?php

mysql_connect("localhost","root","") ;
mysql_select_db("minor") or die(mysql_error());

$email1=$_REQUEST['email1'];
$mob=$_REQUEST['mob'];
$pwd=$_REQUEST['pwd'];
$conf=$_REQUEST['conf'];
$salutation=$_REQUEST['salutation'];
$first_name=$_REQUEST['first_name'];
$last_name=$_REQUEST['last_name'];
$dob=$_REQUEST['dob'];
$house=$_REQUEST['house'];
$address=$_REQUEST['address'];
$place=$_REQUEST['place'];
$state=$_REQUEST['state'];
$pincode=$_REQUEST['pincode'];
$checkbox=$_REQUEST['checkbox'];
$captcha=$_REQUEST['n'];
$secret_ques=$_REQUEST['secret_ques'];
$n1=$_REQUEST['n1'];
	


if($_REQUEST['register'])
{
		$sql=mysql_query("select * from registration where email='$email1'");
		$res=mysql_fetch_array($sql);
		if($res['email']==$email1)
		{
			echo "<script>alert('Id already exists')</script>";	
		}

		
		
		else
		{
			$d=date("d/m/y h:i:s",time()+19800);
			$sql="insert into registration values('$email1','$mob','$pwd','$conf','$salutation','$first_name','$last_name','$dob','$house','$address','$place','$state','$pincode','$d','$secret_ques')";
			$result=mysql_query($sql);
			if(!$result)
				{
					die(mysql_eror());
				}
			else
				{	
				
					echo "<script>alert('Registration Succesful')</script>";		
					echo "<script type='text/javascript'>window.location.href='login.php'</script>";
					//echo '<script type="text/javascript">';
					//echo 'alert("registration successful")';
					//echo 'window.location.href="login.php"';
					
				}
		}
}
?>
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
<script language="JavaScript" src="mm_menu.js"></script>
<link rel="stylesheet" type="text/css" href="effects.css">
<script language="JavaScript" src="config.js"></script>
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
<form method="post" enctype="multipart/form-data" name="f" action="register.php">
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


<table width="75%" height="300" align="center" style="background-color:#E4E3E6" class="image1">
  <tr>
    <th width="62%"><h2 align="left" style="font-style:italic; color:#5F5F5F"> &nbsp;&nbsp;REGISTER</h2>
        <h4>
          <p align="left">Thank you for the interest in registration and membership at Dailyneeds.com.</p>
          <p align="left"> Please do note that we currently serve the citie of Delhi Only. If you currently </p>
          <p align="left">live in some other city, please send an email with your current location to </p>
          <p align="left"> customerservice@dailyneeds.com. We will write to you when we launch our </p>
          <p align="left">service in your city.</p>
          <p align="left">Fields marked with * are mandatory</p>
        </h4></th>
    <th width="37%"> <p align="center" style="color:#808080"> &nbsp;&nbsp;&nbsp;&nbsp; YOU CAN LOGIN WITH GMAIL OR YAHOO</p>
        <p>
          <input type="button" name="gmail" value="GMAIL" class="effectscale" style="color:#001000; font-style:italic; background-color:#C0DCC0; height:55px; width:105px; box-shadow:0px 0px 10px #979393"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="button" name="yahoo" value="YAHOO" class="effectscale" style="color:#001000; font-style:italic; background-color:#C0DCC0; height:55px; width:105px; box-shadow:0px 0px 10px #979393"/>
        </p>
		<br>
		Under Construction</th>
    <td width="1%">
  </tr>
  <tr>
    <th>	 
	<br>
	<br>
	&nbsp;&nbsp;<table width="80%" class="effectscale" height="100px" align="center">
      <tr align="center" bgcolor="#fffff0">
        <th> <h3 align="left">Login Details</h3>
              <h4 align="left">
                <p>&nbsp;&nbsp;&nbsp;Email *&nbsp;&nbsp;&nbsp;&nbsp;
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <input type="email" name="email1" />
                </p>
                <p>&nbsp;&nbsp;&nbsp;Mobile No. *&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    +91<input type="text" name="mob"/>
                </p>
                <p>&nbsp;&nbsp;&nbsp;Password *&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="password" name="pwd"/>
                </p>
                <p>&nbsp;&nbsp;&nbsp;Confirm Password *&nbsp;&nbsp;
                    <input type="password" name="conf"/>
                </p>
              </h4></th>
      </tr>
    </table>
       <br><br> <table class="effectscale" hspace="10px" width="80%" height="226" align="center">
          <tr align="center" bgcolor="#fffff0">
            <th height="200"> <h3 align="left">Personal Details</h3>
                <h4 align="left">
				<p>&nbsp;&nbsp;&nbsp;Salutation *&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<select name="salutation" style="width:175px; height:22px">
				<option>Mr.</option>
				<option>Mrs.</option>
				<option>Ms.</option>
				</select>
				</p>
                  <p>&nbsp;&nbsp;&nbsp;First Name *&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;
                    <input type="text" name="first_name" />
                  </p>
                  <p>&nbsp;&nbsp;&nbsp;Last Name *&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <input type="text" name="last_name"/>
                  </p>
                  <p>&nbsp;&nbsp;&nbsp;Date of birth *&nbsp;&nbsp;&nbsp;&nbsp;
                      <input type="date" name="dob" style="width:167px"/>
                  </p>
            </h4></th>
          </tr>
      </table>
	  <br>
	  <br>
      <table width="80%" class="effectscale" height="257" align="center">
        <tr align="center" bgcolor="#fffff0">
          <th height="251"> <h3 align="left">Address Details</h3>
              <h4 align="left">
                  <p>&nbsp;&nbsp;&nbsp;House No & Details *&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <input type="text" name="house"/>
                  </p>
                <p>&nbsp;&nbsp;&nbsp;Address *&nbsp;&nbsp;&nbsp;&nbsp;
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <input type="text" name="address" hspace="49px"/>
                </p>
                <p>&nbsp;&nbsp;&nbsp;Place *&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" name="place" hspace="75px"/>
                </p>
                <p>&nbsp;&nbsp;&nbsp;State *&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <select style="width:172px; height:22px" name="state">
                    <option>Uttar Pradesh</option>
                    <option>Delhi</option>
                  </select>
                </p>
                <p>&nbsp;&nbsp;&nbsp;Pincode *&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" name="pincode" hspace="87px"/>
                </p>
          </h4>
		  <p>Secret Question   * ----- The Name Of Your First High School / First Pet name / Your Father Name or anything &nbsp;&nbsp;</p>
			  <p><input type="text" name="secret_ques" placeholder="your answer" style="width:255px; height:22px; border-radius:7px;"/></p>
		  </th>
        </tr>
      </table>
	  <br>
	  <br>
      <p align="left" style="font-style:italic; color:#000000;">  
      <h3 align="left">Type the characters shown in the box *</h3>
      </p>
      <p>
          <?php
$a=range("a","z");
$b=range(0,9);
$c=range("A","Z");
$col=array("red","green","blue","purple","#8000FF","#FB7D00","#00D900");
$style=array("Adobe Caslon Pro Bold","Bradley Hand ITC","Brush Script MT","Brush Script Std","Viner Hand ITC","Arial");

$aa=array_rand($a);
$bb=array_rand($b);
$cc=array_rand($c);
$color=array_rand($col);
$font=array_rand($style);

$res= $a[$aa].$b[$bb].$c[$cc];
?>

        <input type="image" align="left" value="<?php echo $res;?>" style="color:<?php echo $col[$color];?>; font-family:<?php  echo $style[$font]; ?>; font-size:36px; border:3px solid #CCCCCC;" width="245" height="45" align="middle">
      </p>
      <br>
      <br>
      <br>
        <p align="left">
        &nbsp;&nbsp;&nbsp; <input  type="text" name="n" class="effectscale" placeholder="match the captcha" style="width:425; height:65; border-radius:4px">&nbsp;&nbsp;
		 <input type="hidden" name="n1" value="<?php echo $res; ?>">
        </p>
<p>
<?php
/*
$n=$_REQUEST['n'];
$n1=$_REQUEST['n1'];
if($_REQUEST['register'])
{
	if($n!=$n1)
	{	
		echo "<script>alert('Capctha Does not Match')</script>";
	}
}*/?>
</p>		
      <p align="left"><br>
            <input type="checkbox" class="effectscale" name="checkbox" hspace="10px" align="left"/>
        &nbsp;&nbsp; I AGREE THE TERMS AND CONDITION </p>
      <p align="left">
  
</p>
	  <p>
   		<input type="submit" name="register" class="effectscale" value="Register" hspace="35px" onClick="return valid();" style="width:125px; height:35px;"/>
        
      </p>
    </th>
  </tr>
</table>


<table align="center" style="background-color:#CFCFCF" vspace="1px" width="74%" height="100%">
	<tr>
	<td>
		<?php
		include ("footer.php");
		
		?>
	
	</td>
	</tr>
</table>
</body>
</form>
</html>