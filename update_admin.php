
<?php

	if((trim($_POST["txtOpw"])) != (trim($_POST["PASSWORD"])))
	{
		echo "Check Old Password is Wrong!";
		exit();
	}

	if((trim($_POST["txtNpw1"])) != (trim($_POST["txtNpw2"])))
		{
			echo "Check New Password is not match";
			exit();
	}


$conn = @mysqli_connect('localhost', 'root', 'root', 'tooling');

if (!$conn) {
    echo "Error: " . mysqli_connect_error();
	exit();
}


		$sql2 = "UPDATE user_admin SET password='".$_POST["txtNpw1"]."' where id='".$_POST['EN']."'";
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
