<html>
<head>
<title>Request OT</title>
</head>
<body>
<?php echo '<i style="color:red;font-size:30px;">      Borrow Tooling </i>'?>
<br>
<br>
<form name="showborrow" method="" action="" target="frm_last">
<?php
//echo "txtQty".$_GET['txtQty']."<br>";
//echo "txtBefor".$_GET['txtBefor']."<br>";
if ($_GET['txtQty']==""||$_GET['txtBefor']=="")
{
echo '<i style="color:red;font-size:30px;">
      Check input box! </i> ';
}
else{
//echo "txtENb".$_GET['TLname']."<br>";
//echo "txtENb".$_GET["NAMEb"]."<br>";
//echo "txtENb".$_GET["SURNAMEb"]."<br>";
//echo "txtENb".$_GET["NAME"]."<br>";






$conn = @mysqli_connect('localhost', 'root', 'root', 'tooling');

if (!$conn) {
    echo "Error: " . mysqli_connect_error();
	exit();
}

$sql3 = "INSERT INTO borrow ";
$sql3 .="(en_borrower,name,qty,borrower,admin_borrower,borrow_date,condition_before,remark) ";
$sql3 .="VALUES ";
$sql3 .="('".$_GET["ENb"]."','".$_GET['TLname']."','".$_GET['txtQty']."','".$_GET['NAMEb']."&nbsp".$_GET["SURNAMEb"]."','".$_GET["NAME"]."&nbsp".$_GET["SURNAME"]."'";
$sql3 .=",now(),'" .$_GET['txtBefor']."','".$_GET['txtTLRemark']."')";
//echo $sql3;

$query = mysqli_query($conn,$sql3);


?>

<table width="900" border="1">
  <tr>
    <th width="290"> <div align="center">Item</div></th>
    <th width="290"> <div align="center">Tooling name</div></th>
    <th width="300"> <div align="center">Qty</div></th>
    <th width="20"> <div align="center">Borrower</div></th>
	<th width="20"> <div align="center">Admin</div></th>
	<th width="20"> <div align="center">BorrowDate</div></th>
	<th width="20"> <div align="center">Admin</div></th>
	<th width="20"> <div align="center">ReturnDate</div></th>
	<th width="50"> <div align="center">ConditionBefore</div></th>
	<th width="50"> <div align="center">ConditionAfter</div></th>
	<th width="50"> <div align="center">Remark </div></th>
  </tr>
<?php
$conn = @mysqli_connect('localhost', 'root', 'root', 'tooling');

if (!$conn) {
    echo "Error: " . mysqli_connect_error();
	exit();
}
$item=1;
$sql4 = "SELECT * FROM borrow where en_borrower='".$_GET["ENb"]."';";
$query = mysqli_query($conn,$sql4);
//echo $sql4;
while($result=mysqli_fetch_array($query,MYSQLI_ASSOC))
{
//$SHen=$result["en_borrower"];
$SHname=$result["name"];
$SHqty=$result["qty"];
$SHborrower=$result["borrower"];
$SHadmin_borrow=$result["admin_borrower"];
$SHborrow_date=$result["borrow_date"];
$SHadmin_return=$result["admin_return"];
$SHreturn_date=$result["return_date"];
$SHcondition_before=$result["condition_before"];
$SHcondition_after=$result["condition_after"];
$SHremark=$result["remark"];
?>
<tr>
<td>     <div style="width: 30px" align="center"><?php echo $item;?></div></td>
<td>     <div style="width: 200px" align="center"><?php echo $SHname;?></div></td>
<td>     <div style="width: 30px" align="center"><?php echo $SHqty;?></div></td>
<td>     <div style="width: 180px" align="center"><?php echo $SHborrower;?></div></td>
<td>     <div style="width: 180px" align="center"><?php echo $SHadmin_borrow;?></div></td>
<td>     <div style="width: 140px" align="center"><?php echo $SHborrow_date;?></div></td>
<td>     <div style="width: 180px" align="center"><?php echo $SHadmin_return;?></div></td>
<td>     <div style="width: 140px" align="center"><?php echo $SHreturn_date;?></div></td>
<td>     <div style="width: 200px" align="center"><?php echo $SHcondition_before;?></div></td>
<td>     <div style="width: 200px" align="center"><?php echo $SHcondition_after;?></div></td>
<td>     <div style="width: 200px" align="center"><?php echo $SHremark;?></div></td>
<?php
$item++;
}
}//end else inputbox
?>



</body>
</html>
