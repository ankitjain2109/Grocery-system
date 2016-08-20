<?php
mysql_connect("localhost","root","");
mysql_select_db("minor") or die(mysql_error());

session_start();
$log=$_REQUEST['log'];
if($log=="logout")
{
	unset($_SESSION['sid']);
	header("location:main.php");
}

$uid=$_SESSION['sid'];
?>
<?php
		
		$sql=mysql_query("select * from registration where email='$uid'");
		$res=mysql_fetch_array($sql);
		if($res)
			{
				echo "Details of $uid Are Displayed.. If you want to change, change it here..";
			}
?>
<link href="effects.css" rel="stylesheet" type="text/css" />



<form method="post" enctype="multipart/form-data" action="account.php">

<link rel="stylesheet" type="text/css" href="effects.css">
<table width="442" height="345" class="effectscale2"  align="center" cellpadding="0" cellspacing="0" style="background-color:#ffffff; color:#FFFFFF; font-size:14px; font-family:Arial; font-weight:bold; padding-left:10px; box-shadow:0px 0px 10px #979393">
  <tr>
  	<td  style="color:#404040">
	<h2 align="left">  EDIT PROFILE </h2>
	<p><h2 align="left" style="color:#CFCFCF"> -------------------------------- </h2></p>

	<h4 align="left">
					</p>
                <p>&nbsp;&nbsp;&nbsp;Salutation
                  <input type="text" name="salutation" value="<?php echo $res['salutation']; ?>" hspace="75px"/>
                  </p>
                  <p>&nbsp;&nbsp;&nbsp;First Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <input type="text" value="<?php echo $res['first_name']; ?>" name="first_name"/>
                  </p>
                <p>&nbsp;&nbsp;&nbsp;Last Name &nbsp;&nbsp;&nbsp;
                  &nbsp;
                  <input type="text" name="last_name" value="<?php echo $res['last_name']; ?>" hspace="49px"/>
                </p>
                <p>&nbsp;&nbsp;&nbsp;Mobile No.
                    <input type="text" value="<?php echo $res['mob_no']; ?>" name="mob_no" hspace="70px"/>
                </p>
                <p>&nbsp;&nbsp;&nbsp;Date Of Birth
                  <input type="date" name="dob" value="<?php echo $res['dob']; ?>" hspace="55px" style="width:170px; height:19px"/>
                  </p>
				  </p>
				   <p>&nbsp;&nbsp;&nbsp;Secret Question --&nbsp;&nbsp;&nbsp;&nbsp; <select style="width:175px; height:22px" name="state">
                    <option>The Name Of Your First High School</option>
                    <option>First Pet name</option>
					<option>Your Father Name</option>
					<option>Other</option>
                  </select>
				  </p>
                <p>&nbsp;&nbsp;&nbsp;Secret Answer
                  <input type="password" name="secret_ques" value="<?php echo $res['secret_ques']; ?>" hspace="44px"/>
                  </p>
                
				<br>
				<p align="center"><input type="submit" name="update_profile" value="Update Details" height="30px" width="40px" align="middle" /></p>
</h4>

</form>
	
	</td>
  </tr>
</table>

