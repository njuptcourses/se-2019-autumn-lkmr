<?php 
session_start();
if (isset($_POST['submit'])){
	if(!empty($_SESSION['loggedin'])) {
		$qty1=$_POST['qty1'];
		$qty2=$_POST['qty2'];
		$qty3=$_POST['qty3'];
		$qty4=$_POST['qty4'];
		$qty5=$_POST['qty5'];
		$qty6=$_POST['qty6'];
		$qty7=$_POST['qty7'];
		$qty8=$_POST['qty8'];
		$qty9=$_POST['qty9'];
		$user_info=$_SESSION['loggedin'];
		$sum=4*$qty1+5*$qty2+5*$qty3+5*$qty4+10*$qty5+10*$qty6+5*$qty7+5*$qty8+5*$qty9;
		$msg="Order placed successfully. Please make a payment of CNY ".$sum." by cash on successful delivery";
		$connect = mysqli_connect("localhost","root","", "foodies");
		//mysql_select_db("foodies") or die("couldn't find database");
$sql1="INSERT INTO orders(email,qty1,qty2,qty3,qty4,qty5,qty6,qty7,qty8,qty9)VALUES('$user_info','$qty1','$qty2','$qty3','$qty4','$qty5','$qty6','$qty7','$qty8','$qty9');";
		if(mysqli_query($connect,$sql1))
		{  
			echo '<script type="text/javascript"> alert("'.$msg.'")</script>';
		}
		else
		{  
			echo "<script type='text/javascript'>alert('Could not place order');</script>";
		} 
	}
	else
		echo "<script type='text/javascript'>alert('Please login');</script>";
}
?>
<html>
<head>
<title>Place your order</title>
<style type="text/css">
@import url(style.css);
   a:link {color: #000000}
   a:visited {color: #000000}
   a:hover {color: #000000}
   a:active {color: #000000}
  font{color:black}
img{width:300; height:200;}
table{border-color:red;height:90%;}
img{border-color:red}
body{no-repeat center center fixed; 
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;}
</style>
<script type="text/javascript">
	function subtractQty(qty){
		if(qty.value - 1 < 0)
			return;
	else
	qty.value--;
	}
	function chk()
	{
		var qty1=document.getElementById("qty1");
		var qty2=document.getElementById("qty2");
		var qty3=document.getElementById("qty3");
		var qty4=document.getElementById("qty4");
		var qty5=document.getElementById("qty5");
		var qty6=document.getElementById("qty6");
		var qty7=document.getElementById("qty7");
		var qty8=document.getElementById("qty8");
		var qty9=document.getElementById("qty9");
		if((qty1.value==0'' && qty2.value==0'' && qty3.value==0'' && qty4.value==0'' &&qty5.value==0'' && qty6.value=00'' && qty7.value=00'' && qty8.value==0'' &&qty9.value==0'')||(qty1.value=='0' && qty2.value=='0' && qty3.value=='0' && qty4.value=='0' && qty5.value=='0' && qty6.value=='0' && qty7.value=='0' && qty8.value=='0' && qty9.value=='0' ))
		{
			alert("Please select atleast 1 item");
			return false;
		}
		return true;	
	}
</script>
</head>
<body background="bg1.jpg">
<FONT size="4" color="black">
<NAV align="right">
<A HREF="index.php">Home</A>&nbsp&nbsp&nbsp
<A HREF="help.php">Help</A>&nbsp&nbsp&nbsp
<?php  
if(isset($_SESSION['user_info']))
	echo 'Welcome <A HREF="login.php"> '.$_SESSION['user_info'].'</a>';
else
	echo '<A HREF="register.php">Login/Register</A>';
?>
</FONT></NAV>
<form action="order.php" name="orderform" method="post">
<table cellspacing="5" cellpadding="2" align="center">
<caption><font size="8"><U>MENU</U></font></caption>
<tr><td>
<img src="menu/baozi.jpg" width="300" height="200" border="5"><br/>
<font size="6">Steamed Stuffed Bun</font>
&nbsp;&nbsp;<input type='text' value='0' name='qty1' id='qty1' size="1" maxlength="2" class="qty" style="width: 25px;"/>
			<input type='button' name='add' onclick='javascript: document.getElementById("qty1").value++;' value='+'/>
			<input type='button' name='subtract' onclick='javascript: subtractQty(qty1);' value='-'/>
<font size="6">CNY 4</font>
</td>
<td>
<img src="menu/jiaozi.jpg" width="300" height="200" border="2"><br/>
<font size="6">Dumplings</font>
&nbsp;&nbsp;<input type='text'value='0' name='qty2' id='qty2' size="1" maxlength="2" class="qty" style="width: 25px;"/>
			<input type='button' name='add' onclick='javascript: document.getElementById("qty2").value++;' value='+'/>
			<input type='button' name='subtract' onclick='javascript: subtractQty(qty2);' value='-'/>
<font size="6">CNY 5</font>
</td>
<td>
<img src="menu/Spring_Rolls.jpg" width="300" height="200" border="2"><br/>
<font size="6">Spring Rolls</font>
&nbsp;&nbsp;<input type='text' value='0' name='qty3' id='qty3' size="1" maxlength="2" class="qty" style="width: 25px;"/>
			<input type='button' name='add' onclick='javascript: document.getElementById("qty3").value++;' value='+'/>
			<input type='button' name='subtract' onclick='javascript: subtractQty(qty3);' value='-'/>
<font size="6">CNY 5</font>
</td>
</tr>
<tr>
<td>
<img src="menu/glutinous.jpg" width="300" height="200" border="2" ><br/>
<font size="6">Glutinous rice balls</font>
&nbsp;&nbsp;<input type='text' value='0' name='qty4' id='qty4' size="1" maxlength="2" class="qty" style="width: 25px;"/>
			<input type='button' name='add' onclick='javascript: document.getElementById("qty4").value++;' value='+'/>
			<input type='button' name='subtract' onclick='javascript: subtractQty(qty4);' value='-'/>
<font size="6">CNY 5</font>
</td><td>
<img src="menu/fried_noodles.jpeg" width="300" height="200" border="2"><br/>
<font size="6">Fried Noodles</font>
&nbsp;&nbsp;<input type='text' value='0' name='qty5' id='qty5' size="1" maxlength="2" class="qty" style="width: 25px;"/>
			<input type='button' name='add' onclick='javascript: document.getElementById("qty5").value++;' value='+'/>
			<input type='button' name='subtract' onclick='javascript: subtractQty(qty5);' value='-'/>
			<font size="6">CNY 10</font>
</td>
<td>
<img src="menu/Fried_Rice.jpg" width="300" height="200" border="2"><br/>
<font size="6">Fried Rice</font>
&nbsp;&nbsp;<input type='text' value='0' name='qty6' id='qty6' size="1" maxlength="2" class="qty" style="width: 25px;"/>
			<input type='button' name='add' onclick='javascript: document.getElementById("qty6").value++;' value='+'/>
			<input type='button' name='subtract' onclick='javascript: subtractQty(qty6);' value='-'/>
<font size="6">CNY 10</font>
</td>
</tr>
<tr>
<td>
<img src="menu/beef.jpg" width="300" height="200" border="2"><br/>
<font size="6">Beef</font>
&nbsp;&nbsp;<input type='text' value='0' name='qty7' id='qty7' size="1" maxlength="2" class="qty" style="width: 25px;"/>
			<input type='button' name='add' onclick='javascript: document.getElementById("qty7").value++;' value='+'/>
			<input type='button' name='subtract' onclick='javascript: subtractQty(qty7);' value='-'/>
<font size="6">CNY 5</font>
</td><td>
<img src="menu/chicken.jpg" width="300" height="200" border="2"><br/>
<font size="6">Chicken</font>
&nbsp;&nbsp;<input type='text' value='0' name='qty8' id='qty8' size="1" maxlength="2" class="qty" style="width: 25px;"/>
			<input type='button' name='add' onclick='javascript: document.getElementById("qty8").value++;' value='+'/>
			<input type='button' name='subtract' onclick='javascript: subtractQty(qty8);' value='-'/>
<font size="6">CNY 5</font>
</td>
<td>
<img src="menu/soup.jpg" width="300" height="200" border="2"><br/>
<font size="6">Soup</font>
&nbsp;&nbsp;<input type='text' value='0' name='qty9' id='qty9' size="1" maxlength="2" class="qty" style="width: 25px;"/>
			<input type='button' name='add' onclick='javascript: document.getElementById("qty9").value++;' value='+'/>
			<input type='button' name='subtract' onclick='javascript: subtractQty(qty9);' value='-'/>
<font size="6">CNY 5</font>
</td>
</tr>
<tr></tr><tr></tr><tr></tr><tr></tr><tr><td colspan="3"><input type="submit" name="submit" value="Confirm Order"  class="button" onclick="return chk()"></input></td></tr>
</table></form>
</body>
</html>