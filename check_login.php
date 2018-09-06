<html>
<head>
<title>Request Tooling</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
<body>
</head>
<?php
//echo $_POST['txtENb'];
//echo $ENbt=$_POST['txtENb'];
//echo $ENbt=$_POST['txtENb'];


?>

<form name="login" method="get" action="add_data_borrow.php" target="footer">
<?php

$conn = @mysqli_connect('localhost', 'root', 'root', 'tooling');

if (!$conn) {
    echo "Error: " . mysqli_connect_error();
	exit();
}
$sql ="SELECT * FROM user_admin WHERE EN = '".$_POST['txtUsername']."'
	and password = '".$_POST['txtPassword']."'";
$query = mysqli_query($conn,$sql);
$result=mysqli_fetch_array($query);

if (!$result){
echo"<br>";
echo"<br>";
echo"<br>";
echo"<br>";

echo '<i style="color:red;font-size:30px;">
      Username and Password Incorrect! </i> ';
}
else {
$EN=$result["en"];
$NAME=$result["name"];
$SURNAME=$result["surname"];





$sql3 ="SELECT * FROM user WHERE en = '".$_POST['txtENb']."'";
$query = mysqli_query($conn,$sql3);
$result=mysqli_fetch_array($query);

if (!$result){
echo"<br>";
echo"<br>";
echo"<br>";
echo"<br>";

echo '<i style="color:red;font-size:30px;">
      EN(borrower) Incorrect! </i> ';
}
else {
$ENb=$result["en"];
$NAMEb=$result["name"];
$SURNAMEb=$result["surname"];





?>
<?php $NAME_AD=$NAME."&nbsp".$SURNAME; ?>

<table width="1000" border="1">
  <tr>
    <th width="290"> <div align="center">Tooling name</div></th>
    <th width="20"> <div align="center">Qty</div></th>
    <th width="20"> <div align="center">Borrower</div></th>
	<th width="80"> <div align="center">AdminBorrow</div></th>
	<th width="80"> <div align="center">Condition before</div></th>
	<th width="50"> <div align="center">Remark</div></th>
  </tr>

  <tr>
  <td>
	<select name='TLname' style="width: 320px">
<?php
$conn = @mysqli_connect('localhost', 'root', 'root', 'tooling');

if (!$conn) {
    echo "Error: " . mysqli_connect_error();
	exit();
}

$sql2 = "SELECT * FROM tool_list";
$query = mysqli_query($conn,$sql2);

while($result=mysqli_fetch_array($query,MYSQLI_ASSOC))
{
$TLNAME=$result["name"];
$TLQTY=$result["qty"];

?>
	echo"<option value='<?php echo $TLNAME;?>'><?php echo $TLNAME;?></option>";
<?php
}
?>
 </select>       </td>

<td>     <input name="txtQty" type="text" id="txtQty" align="center" style="width: 30px">        </td>


<td>     <div style="width: 190px" align="center"><?php echo $NAMEb."&nbsp".$SURNAMEb;?></div></td>


<td>     <div style="width: 190px" align="center"><?php echo $NAME_AD;?></div></td>

<td>    <input name="txtBefor" type="text" id="txtBefor">         </td>
<td>    <input name="txtTLRemark" type="text" id="txtTLRemark">         </td>
</table>

<php? echo $EN;?>
<input name="EN" type="hidden" value="<?php echo $EN; ?>" />
<input name="NAME" type="hidden" value="<?php echo $NAME; ?>" />
<input name="SURNAME" type="hidden" value="<?php echo $SURNAME; ?>" />
<input name="TLNAME" type="hidden" value="<?php echo $TLNAME; ?>" />
<input name="TLQTY" type="hidden" value="<?php echo $TLQTY; ?>" />
<input name="ENb" type="hidden" value="<?php echo $ENb; ?>" />
<input name="NAMEb" type="hidden" value="<?php echo $NAMEb; ?>" />
<input name="SURNAMEb" type="hidden" value="<?php echo $SURNAMEb; ?>" />

  <br>
  <input type="submit" name="submit" value="Add">
<br>
<br>
<a href='return_tool.php?ENb=<?php echo $_POST['txtENb']?>?NAME_AD=<?php echo $NAME_AD?>' target="footer">Return Tooling </a>
<br>
<br>

  </form>
<?php
}
}
?>

</body>
</head>
</html>
