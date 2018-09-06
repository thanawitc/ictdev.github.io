<html>
<head>
<title>Request Tooling</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
<body>
<form name="form1" method="post" action="update_register_tool.php" target="footer">
<?php



	if(trim($_POST["txtTLName"]) == "")
	{
		echo "Please input TL Name!";
		exit();
	}
?>


<?php
$conn = @mysqli_connect('localhost', 'root', 'root', 'tooling');

if (!$conn) {
    echo "Error: " . mysqli_connect_error();
	exit();
}
//echo 'Connected to MySQL';

   $sql = "SELECT * FROM tool_list WHERE name = '".trim($_POST['txtTLName'])."' ";
$query = mysqli_query($conn,$sql);

while($result=mysqli_fetch_array($query,MYSQLI_ASSOC))
{
$EID=$result["id"];
$ENAME=$result["name"];
$ESURNAME=$result["qty"];
}

?>





  <table width="3" border="1" style="width: 300px">
    <tbody>
      <tr>
        <td width="100"> &nbsp;ID</td>

<td>     <div align="center"><?php echo $EID;?></div></td>
<input name="EN" type="hidden" value="<?php echo $EID; ?>" />
      <tr>
        <td>&nbsp;Name</td>
        <td><input name="txtName" type="text" id="txtName" size="25"></td>
      </tr>
      <tr>
	  <td>&nbsp;QTY</td>
	  <td><input name="txtSurname" type="text" id="txtSurname" size="25"></td>
	  </tr>

    </tbody>
  </table>
  <br>
  <input type="submit" name="Submit" value="Update">
</form>
</body>
</html>