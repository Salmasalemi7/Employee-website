<?php 
 ?>
<html>
<style type="text/css">
.form-style-7{
	max-width:400px;
	margin:50px auto;
	background:#fff;
	border-radius:2px;
	padding:20px;
	font-family: Georgia, "Times New Roman", Times, serif;
}
.form-style-7 h1{
	display: block;
	text-align: center;
	padding: 0;
	margin: 0px 0px 20px 0px;
	color: #5C5C5C;
	font-size:x-large;
}
.form-style-7 ul{
	list-style:none;
	padding:0;
	margin:0;	
}
.form-style-7 li{
	display: block;
	padding: 9px;
	border:1px solid #DDDDDD;
	margin-bottom: 30px;
	border-radius: 3px;
}
.form-style-7 li:last-child{
	border:none;
	margin-bottom: 0px;
	text-align: center;
}
.form-style-7 li > label{
	display: block;
	float: left;
	margin-top: -19px;
	background: #FFFFFF;
	height: 14px;
	padding: 2px 5px 2px 5px;
	color: #B9B9B9;
	font-size: 14px;
	overflow: hidden;
	font-family: Arial, Helvetica, sans-serif;
}
.form-style-7 input[type="text"],
.form-style-7 input[type="date"],
.form-style-7 input[type="datetime"],
.form-style-7 input[type="email"],
.form-style-7 input[type="number"],
.form-style-7 input[type="search"],
.form-style-7 input[type="time"],
.form-style-7 input[type="url"],
.form-style-7 input[type="password"],
.form-style-7 textarea,
.form-style-7 select 
{
	box-sizing: border-box;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	width: 100%;
	display: block;
	outline: none;
	border: none;
	height: 25px;
	line-height: 25px;
	font-size: 16px;
	padding: 0;
	font-family: Georgia, "Times New Roman", Times, serif;
}
.form-style-7 input[type="text"]:focus,
.form-style-7 input[type="date"]:focus,
.form-style-7 input[type="datetime"]:focus,
.form-style-7 input[type="email"]:focus,
.form-style-7 input[type="number"]:focus,
.form-style-7 input[type="search"]:focus,
.form-style-7 input[type="time"]:focus,
.form-style-7 input[type="url"]:focus,
.form-style-7 input[type="password"]:focus,
.form-style-7 textarea:focus,
.form-style-7 select:focus 
{
}
.form-style-7 li > span{
	background: #F3F3F3;
	display: block;
	padding: 3px;
	margin: 0 -9px -9px -9px;
	text-align: center;
	color: #C0C0C0;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
}
.form-style-7 textarea{
	resize:none;
}
.form-style-7 input[type="submit"],
.form-style-7 input[type="button"]{
	background: #2471FF;
	border: none;
	padding: 10px 20px 10px 20px;
	border-bottom: 3px solid #5994FF;
	border-radius: 3px;
	color: #D2E2FF;
}
.form-style-7 input[type="submit"]:hover,
.form-style-7 input[type="button"]:hover{
	background: #6B9FFF;
	color:#fff;
}
</style>
<body>
	<a href="HRre.php"> list order</a>
 <form class="form-style-7">
<ul>
<li>
	

    <label for="HR_id">HR ID</label>
    <input type="number" name="HR_id" min="1" value="<?php echo $row['HR_id'];?>">
    <span>Enter HR ID here</span>
</li>
<li>
    <label for="Order_id">order ID</label>
    <input type="number" min="1" name="Order_id" 
 value="<?php echo $row['Order_id'];?>">
 <span>Enter Order ID here</span>

  
</li>
<li>
    <label for="url">statue</label>
    <input type="radio" name="orderSt" value="accept" > Accept <br>
 <input type="radio" name="orderSt" value="pandid" > Pandid <br>
 <input type="radio" name="orderSt" value="reject" > Reject <br>
 <span>Choice status here</span>
    
</li>
<li>
    <input type="submit" value="submit" >
</li>
</ul>
</form></body></html>

<script type="text/javascript">
//auto expand textarea
function adjust_textarea(h) {
    h.style.height = "20px";
    h.style.height = (h.scrollHeight)+"px";
}
<?php

 if(count($_POST)>0) {

 	
mysqli_query($con,"UPDATE Korder SET orderSt='". $_POST['orderSt'] ."'
	 where HR_id='". $_POST['HR_id'] ."' and Order_id='". $_POST['Order_id']."'");


$result = mysqli_query($con,
	"SELECT HR_id  FROM Korder WHERE Order_id ='" . $_POST['Order_id'] . "'");
$row= mysqli_fetch_array($result);

if (isset($_POST['submit'])) {
	header("location:HRre.php");
}
	
  	}
	
  	
/*

if("SELECT order_state from Korder where '" . $_POST['order_state'] ."'"=="accept"){

 $def1=mysqli_query($con,"SELECT 'product-quantity'  FROM product ");
 $def2=mysqli_query($con,"SELECT 'quantity'  FROM Korder ");
 $re=floor($def1-$def2);
 $hhh = mysqli_query($con,"INSERT into  product values 'product-quantity'='$re' " );

 }
	
	*/
  ?>



</script>