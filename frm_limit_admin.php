<html>
<head>
<title>Request OT</title>
</head>
<body>
<!--<form action="#" method="post">//-->

<form action="update_limit_ot.php" target="frm_last" method="post">
<?echo "Result List OT Database"?>
<br>

<?php
$conn = @mysqli_connect('localhost', 'root', 'root', 'OT_database');

if (!$conn) {
    echo "Error: " . mysqli_connect_error();
	exit();
}
?>

<p>UPDATE LIMIT OT FOR USER</p>

<p>"Choose select Name ( * show all only)"</p>



<select name="user_list">
<option value = "*">*</option>
<?php

$sql2 = "SELECT * FROM user";
$query2 = mysqli_query($conn,$sql2);
?>


<?php
while($result2=mysqli_fetch_array($query2,MYSQLI_ASSOC))
{
?>

<!--<option value = 'ot_limit_select_admin.php?ASNAME=<?=$ASNAME?>'><?php echo $result["name"] ?></option>-->
<!--<option value = '1'><?php echo $result2["name"] ?></option>-->
<option value = "<?php echo $result2["name"] ?>"><?php echo $result2["name"] ?></option>
<!--<option value="Yellow">Yellow</option>-->
<!--<option value="Red">Red</option>-->
<?php
}

?>
</select>

<input name="txtlimit" type="text" id="txtlimit" style="width:30px;"/>
<input type="submit" name="submit" value="Update" />
<?php
/*
if(isset($_POST['submit'])){
$selected_val = $_POST['user_list'];  // Storing Selected Value In Variable
echo "You have selected :" .$selected_val;  // Displaying Selected Value
}
*/
?>

</td>
</tr>

</form>




</body>
</html>
