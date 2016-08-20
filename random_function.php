

 <?php
$a=range("A","Z");
$b=range(0,9);
$c=range("A","Z");
$d=range(0,9);
$e=range("A","Z");
$col=array("red","green","blue","purple","orange","black","#8000FF","#FB7D00","#00D900");
$style=array("Adobe Caslon Pro Bold","Bradley Hand ITC","Brush Script MT","Brush Script Std","Viner Hand ITC","Arial");

$aa=array_rand($a);
$bb=array_rand($b);
$cc=array_rand($c);
$dd=array_rand($d);
$ee=array_rand($e);
$color=array_rand($col);
$font=array_rand($style);

$res3= $a[$aa].$b[$bb].$c[$cc].$d[$dd].$e[$ee];
?>
<link href="effects.css" rel="stylesheet" type="text/css">
<body>
<form action="payment.php" enctype="multipart/form-data" method="post">


 <input type="image" align="left" value="<?php echo $res3;?>" style="color:<?php echo $col[$color];?>; font-family:<?php  echo $style[$font]; ?>; font-size:36px; border:3px solid #CCCCCC;" width="245" height="45" align="middle">
      </p>
      <br>
      <br>
	  <br>
      <br>
       <p align="left">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input  type="text" name="n" placeholder="match the captcha" class="effectscale" style="width:385; height:25">&nbsp;&nbsp;
		 <input type="hidden" name="n1" value="<?php echo $res3; ?>">
        </p>
		<br>
	
		Select Delivery Slots<select name="slot">
	<option value="7:00am to 9:30pm">7:00am to 9:30am</option>
	<option value="9:30am to 12:30pm">9:30am to 12:30pm</option>
	<option value="5:00am to 7:30pm">5:00pm to 7:30pm</option>
	<option value="7:30am to 10:00pm">7:30pm to 10:00pm</option>
	</select>
<h3 align="center">
			<input align="middle" type="submit" class="pulse-shrink shadow-radial" id="box" name="finalize1" style="height:40px; width:120px" value="Submit" height="40x" width="60px"/> 
			</h3>


</form>

</body>
</html>
