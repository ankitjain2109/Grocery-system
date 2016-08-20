
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
$captcha=$_REQUEST['captcha'];
$secret_ques=$_REQUEST['secret_ques'];
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
<script language="JavaScript" src="mm_menu.js"></script>
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
<form method="post" enctype="multipart/form-data" name="f" action="delete.php">
<script language="JavaScript1.2">mmLoadMenus();</script>
<div id="header" style="height:36px;width:100%; background-color:#ededed;" >
  <div id="loc"></div>
  <div id="slots"><img src="Pj/img8.jpg"><a name="link1" id="link1" onMouseOver="MM_showMenu(window.mm_menu_1004165716_0,0,19,null,'link1')" onMouseOut="MM_startTimeout();">Check our delivery slots</a></div>
  
   <div id="a">
     <blockquote>
       <p>Free delivery for orders Rs1000 and above&nbsp;&nbsp;&nbsp;	&nbsp;
         <a name="link3" id="link2" onMouseOver="MM_showMenu(window.mm_menu_1004170146_0,170,16,null,'link3')" onMouseOut="MM_startTimeout();">NEW TO DAILY NEEDS?</a> &nbsp;&nbsp;&nbsp;&nbsp;
         <a href="login.php" style="color:#FF0000; text-decoration:none">Login</a> |&nbsp;
         <a href="register.php" style="color:#FF0000;text-decoration:none">Register</a>
       </p>
     </blockquote>
  </div>
</div>

<table width="74%" height="95" align="center">
<tr>

<th width="80" height="82"><img src="Pj/img5.jpg" align="middle" style="size:landscape; height: 60px; width:80px"/></th>
&nbsp;&nbsp;&nbsp;&nbsp;<th width="500"><input type="text" name="search" width="300px" height="200px" size="+60" placeholder="&nbsp;&nbsp;&nbsp;Search your needs" style="border-radius:8px; height:25px; width:500px";/></th>&nbsp;&nbsp;&nbsp;&nbsp;<th width="80"><input type="button" name="srchbutton" value="SEARCH" style="height:25px; width:80px"/></th>&nbsp;&nbsp;&nbsp;<th width="150" style="background-color:#CCCCCC"><p>Your Basket Item</p><p style="font-size:12px;">Start Shopping <img src="Pj/arrows.gif"/> </p></th>
</tr>
</table>
<table width="74%" height="300" align="center" style="background-color:#E4E3E6">
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
          <input type="button" name="gmail" value="GMAIL" style="color:#001000; font-style:italic; background-color:#C0DCC0; height:25px; width:85px; box-shadow:0px 0px 10px #979393"/>
          <input type="button" name="yahoo" value="YAHOO" style="color:#001000; font-style:italic; background-color:#C0DCC0; height:25px; width:85px; box-shadow:0px 0px 10px #979393"/>
        </p></th>
    <td width="1%">
  </tr>
  <tr>
    <th>	 
	<table width="100%" height="100px" align="center">
      <tr align="center" bgcolor="#fffff0">
        <th> <h3 align="left">Login Details</h3>
              <h4 align="left">
                <p>&nbsp;&nbsp;&nbsp;Email *&nbsp;&nbsp;&nbsp;&nbsp;
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <input type="text" name="email1" />
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
        <table width="100%" height="206" align="center">
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
      <table width="100%" height="257" align="center">
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
         <input  type="text" name="n" placeholder="match the captcha" style="width:385; height:25">&nbsp;&nbsp;
		 <input type="hidden" name="n1" value="<?php echo $res; ?>">
        </p>
<p>
<?php
$n=$_REQUEST['n'];
$n1=$_REQUEST['n1'];
if($_REQUEST['register'])
{
	if($n!=$n1)
	{	
		echo "<font size='-2' color='#FFFBF0'> <h5> CAPTCHA DIDN'T MATCH </h5></font>'";
	}
}?>
</p>		
      <p align="left"><br>
            <input type="checkbox" name="checkbox" hspace="10px" align="left"/>
        &nbsp;&nbsp; I AGREE THE TERMS AND CONDITION </p>
      <p align="left">
  
</p>
	  <p>
   		<input type="submit" name="next" value="validation check" hspace="35px" onClick="return valid();" style="width:125px; height:35px;"/>
        <input type="submit" name="register" value="Finish" hspace="45px" style="width:125px; height:35px;"/>
      </p>
	  </th>
  </tr>
</table>



</body>
</form>
</html>