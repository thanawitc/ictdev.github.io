<html>
<head>
<title>Request OT</title>
</head>
<body>

<form name="showborrow" method="get" action="" target="footer">
<?php
//echo "name_ad".$_GET["NAME_AD"];
foreach($_GET["checkbox"] as $value){

    // ..Delete FROM ... where userID = $value
    //echo "checkbox".$_GET["checkbox"].$value;
 $value;
$pos = strpos($value, '|', 0); // $pos = 7, not 0
$value_id=substr($value, 0,$pos);
$value_row=substr($value, $pos+1);


//echo $_GET["txtcondi_after"][$count];


$conn = @mysqli_connect('localhost', 'root', 'root', 'tooling');

if (!$conn) {
    echo "Error: " . mysqli_connect_error();
	exit();
}

//UPDATE `borrow` SET `en_borrower` = '33', `name` = '????????3', `qty` = '3' WHERE `borrow`.`id` = 29;
$sql = "UPDATE borrow SET condition_after='Returned,".$_GET["txtcondi_after"][$value_row]."',".
"admin_return='tt',return_date=now(),remark='".$_GET["txtremark"][$value_row]."' where id='".$value_id."';";


//echo $sql;
$query = mysqli_query($conn,$sql);

echo '<i style="color:green;font-size:30px;"> Returned ! </i>'."<br>";
}

?>


</body>
</html>
