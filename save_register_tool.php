<?php


	if(trim($_POST["txtTLName"]) == "")
	{
		echo "Please input TL Name!";
		exit();
	}


$conn = @mysqli_connect('localhost', 'root', 'root', 'tooling');

if (!$conn) {
    echo "Error: " . mysqli_connect_error();
	exit();
}
//echo 'Connected to MySQL';

   $sql = "SELECT * FROM tool_list WHERE name = '".trim($_POST['txtTLName'])."' ";
   $query = mysqli_query($conn,$sql);
   $result=mysqli_fetch_array($query,MYSQLI_ASSOC);
//echo $sql.$result;
if($result)
	{
	        echo "<br>";
	        echo "<br>";
            echo "<br>";

echo '<i style="color:blue;font-size:30px;">
      TL Name already exists! </i> ';
	}
	else
	{

		$sql2 = "INSERT INTO tool_list (name,qty,remark) VALUES ('".$_POST["txtTLName"]."','".$_POST["txtTLQty"]."','".$_POST["txtTLRemark"]."')";
		$query2 = mysqli_query($conn,$sql2);
        //echo $sql2.$result;
        echo "<br>";
        echo "<br>";
        echo "<br>";

echo '<i style="color:green;font-size:30px;">
      Register Completed!</i> ';

		/*echo "<br> Go to <a href='login.php'>Login page</a>";*/

	}

	//mysql_close();

?>
