<html>
<link href="effects.css" rel="stylesheet" type="text/css">
<body>
<form enctype="multipart/form-data" method="post" action="payment.php">
<table width="75%" align="center">
<tr>
<td width="37.5%">
Select Your Bank&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="bank_name" class="effectscale" style="width:190px; height:30px">
		<option value="State Bank">State Bank</option>
		<option value="Axis Bank">Axis Bank</option>
		<option value="Canada Bank">Canada Bank</option>
		<option value="HDFC Bank">HDFC Bank</option>
	</select>
	</td>
	<td width="37.5%">

&nbsp;&nbsp;&nbsp;&nbsp;Enter your Card No&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="effectscale" style="height:30px" width="190px" name="card_no" placeholder="Enter Card No Here"/>
</td>
</tr>
<br><br>
<br>
<br>
<br>
<tr valign="30px">
<td width="37.5%">
Enter 3 digit Pin No&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="pin" class="effectscale" width="190px" style="height:30px" placeholder="Enter pin" maxlength="3"/>
</td>
<td width="37.5%">
&nbsp;&nbsp;&nbsp;&nbsp;Select Delivery Slots&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select style="width:170px; height:30px" class="effectscale" name="slot1">
<option value="7:00am to 9:30am">7:00am to 9:30am</option>
<option value="9:30am to 12:30pm">9:30am to 12:30pm</option>
<option value="5:00pm to 7:30pm">5:00pm to 7:30pm</option>
<option value="7:30pm to 10:00pm">7:30pm to 10:00pm</option>
</select>
</td>
</tr>
</table>
<br>
<br>
<h3 align="center">
			<input align="middle" class="pulse-shrink shadow-radial" id="box" type="submit" name="finalize" style="height:40px; width:120px" value="Submit" height="40x" width="60px"/> 
  </h3></form>

</td>
</tr>
</table>


</body>
</html>

