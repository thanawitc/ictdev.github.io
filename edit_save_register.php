<html>
<head>
<title>Request Tooling</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
<body>
<form name="form1" method="post" action="update_register.php" target="footer">
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

   $sql = "SELECT * FROM user WHERE EN = '".trim($_POST['txtEN'])."' ";
$query = mysqli_query($conn,$sql);

while($result=mysqli_fetch_array($query,MYSQLI_ASSOC))
{
echo $EID=$result["id"];
$EEN=$result["en"];
$ENAME=$result["name"];
$ESURNAME=$result["surname"];
}

?>





  <table width="3" border="1" style="width: 300px">
    <tbody>
      <tr>
        <td width="100"> &nbsp;EN</td>

<td>     <div align="center"><?php echo $EEN;?></div></td>
       <input name="EN" type="hidden" value="<?php echo $EID; ?>" />
      <tr>
        <td>&nbsp;Name</td>
        <td><input name="txtName" type="text" id="txtName" size="25"></td>
      </tr>
      <tr>
	  <td>&nbsp;Surname</td>
	  <td><input name="txtSurname" type="text" id="txtSurname" size="25"></td>
	  </tr>

    </tbody>
  </table>
  <br>
  <input type="submit" name="Submit" value="Submit">
</form>
</body>
</html>