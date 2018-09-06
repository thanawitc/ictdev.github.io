<html>
<head>
<title>Request OT </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
<body>
</head>

<?php echo '<i style="color:red;font-size:30px;">      Return Tooling </i>'?>
<br>
<br>
<form name="login" method="get" action="return.php" target="footer">



<table width="" border="1">
  <tr>
    <th width="290"> <div align="center">item</div></th>
    <th width="290"> <div align="center">Tooling name</div></th>
    <th width="300"> <div align="center">Qty</div></th>
    <th width="20"> <div align="center">Borrower</div></th>
	<th width="20"> <div align="center">AdminBorrow</div></th>
	<th width="20"> <div align="center">BorrowDate</div></th>
<!--	<th width="20"> <div align="center">Admin</div></th>-->
<!--	<th width="20"> <div align="center">ReturnDate</div></th>-->
	<th width="50"> <div align="center">ConditionBefore</div></th>
	<th width="50"> <div align="center">ConditionAfter</div></th>
	<th width="50"> <div align="center">Remark </div></th>
  </tr>
<?php
echo "enb".$_GET["ENb"];
//echo "name_ad".$_GET["NAME_AD"];

$conn = @mysqli_connect('localhost', 'root', 'root', 'tooling');

if (!$conn) {
    echo "Error: " . mysqli_connect_error();
	exit();
}
$row=0;
$Sitem=1;
$sql4 = "SELECT * FROM borrow where en_borrower='".$_GET["ENb"]."' and condition_after is NULL;";
$query = mysqli_query($conn,$sql4);
//echo $sql4;
?>


<?php
while($result=mysqli_fetch_array($query,MYSQLI_ASSOC))
{

$SHid=$result["id"];
//$SHen=$result["en_borrower"];
$SHname=$result["name"];
$SHqty=$result["qty"];
$SHborrower=$result["borrower"];
$SHadmin_borrow=$result["admin_borrower"];
$SHborrow_date=$result["borrow_date"];
$SHadmin_return=$result["admin_return"];
$SHreturn_date=$result["return_date"];
$SHcondition_before=$result["condition_before"];
//$SHcondition_after=$result["condition_after"];
$SHremark=$result["remark"];


?>
<tr>
<!--<td>     <div style="width: 30px" align="center"><?php echo $SHid;?></div></td>-->
<td>     <div style="width: 30px" align="center"><?php echo $Sitem;?></div></td>
<td>     <div style="width: 180px" align="center"><?php echo $SHname;?></div></td>
<td>     <div style="width: 30px" align="center"><?php echo $SHqty;?></div></td>
<td>     <div style="width: 180px" align="center"><?php echo $SHborrower;?></div></td>
<td>     <div style="width: 180px" align="center"><?php echo $SHadmin_borrow;?></div></td>
<td>     <div style="width: 140px" align="center"><?php echo $SHborrow_date;?></div></td>

<!--<td>     <div align="center"><?php echo $SHadmin_return;?></div></td>-->
<!--<td>     <div align="center"><?php echo $_GET["NAME_AD"];?></div></td>-->
<!--<td>     <div align="center"><?php echo $SHreturn_date;?></div></td>-->
<td>     <div style="width: 200px" align="center"><?php echo $SHcondition_before;?></div></td>
<td>     <input name="txtcondi_after[]" type="text" id="txtcondi_after"></td>
<td>     <input name="txtremark[]" type="text" id="txtremark"></td></td>
<!--<td>     <div style="width: 200px" align="center"><?php echo $SHremark;?></div></td>-->
<!--<td>     <div align="center"><?php echo $SHcondition_after;?></div></td>-->

<td> <input type='checkbox' name='checkbox[]' value='<?php echo $SHid."|".$row?>'</td>

<!--<td> <input type="checkbox" id="chk_test" name="chk_test" value="1" {checked_flag}></td>-->

<?php
$row++;
$Sitem++;
}
?>
</table>

  <br>
  <input type="submit" name="submit" value="Submit">
  </form>




</body>
</head>
</html>
