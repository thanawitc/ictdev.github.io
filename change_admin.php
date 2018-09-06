<html>
<head>
<title>Request Tooling</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
<body>
<form name="form1" method="post" action="update_admin.php" target="footer">
<?php



	if(trim($_POST["txtEN"]) == "")
	{
		echo "Please input EN!";
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

   $sql = "SELECT * FROM user_admin WHERE EN = '".trim($_POST['txtEN'])."' and password='".trim($_POST['txtPassword'])."'";
$query = mysqli_query($conn,$sql);

while($result=mysqli_fetch_array($query,MYSQLI_ASSOC))
{
echo $EID=$result["id"];
echo $EEN=$result["en"];
echo $EPASSWORD=$result["password"];
echo $ENAME=$result["name"];
echo $ESURNAME=$result["surname"];
}

?>





  <table width="3" border="1" style="width: 400px">
    <tbody>
      <tr>
        <td width="200"> &nbsp;EN</td>

<td>     <div align="center"><?php echo $EEN;?></div></td>
<input name="EN" type="hidden" value="<?php echo $EID; ?>" />
<input name="PASSWORD" type="hidden" value="<?php echo $EPASSWORD; ?>" />
      <tr>
	  <td>&nbsp;Old  Password</td>
	  <td><input name="txtOpw" type="text" id="txtOpw" size="25"></td>
	  </tr>

	  <td>&nbsp;New Password</td>
	  <td><input name="txtNpw1" type="text" id="txtNpw1" size="25"></td>
	  </tr>

	  <td>&nbsp;New Password</td>
	  <td><input name="txtNpw2" type="text" id="txtNpw2" size="25"></td>
	  </tr>
    </tbody>
  </table>
  <br>
  <input type="submit" name="Submit" value="Update">
</form>
</body>
</html>