
<?php


	if(trim($_POST["txtName"]) == "")
	{
		echo "Please input Name!";
		exit();
	}

	if(trim($_POST["txtSurname"]) == "")
		{
			echo "Please input Qty!";
			exit();
	}

$conn = @mysqli_connect('localhost', 'root', 'root', 'tooling');

if (!$conn) {
    echo "Error: " . mysqli_connect_error();
	exit();
}


		$sql2 = "UPDATE tool_list SET name='".$_POST["txtName"]."',qty='".$_POST["txtSurname"]."' where id='".$_POST['EN']."'";
		$query2 = mysqli_query($conn,$sql2);
        //echo $sql2.$result;
        echo "<br>";
        echo "<br>";
        echo "<br>";

echo '<i style="color:green;font-size:30px;">
      Update Completed!</i> ';

		/*echo "<br> Go to <a href='login.php'>Login page</a>";*/


	//mysql_close();

?>
