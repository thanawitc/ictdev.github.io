
<?php



	if(trim($_POST["txtEN"]) == "")
	{
		echo "Please input EN!";
		exit();
	}

	if(trim($_POST["txtName"]) == "")
	{
		echo "Please input Name!";
		exit();
	}

	if(trim($_POST["txtSurname"]) == "")
		{
			echo "Please input Surname!";
			exit();
	}

$conn = @mysqli_connect('localhost', 'root', 'root', 'tooling');

if (!$conn) {
    echo "Error: " . mysqli_connect_error();
	exit();
}
//echo 'Connected to MySQL';

   $sql = "SELECT * FROM user WHERE EN = '".trim($_POST['txtEN'])."' ";
   $query = mysqli_query($conn,$sql);
   $result=mysqli_fetch_array($query,MYSQLI_ASSOC);
//echo $sql.$result;
if($result)
	{
	        echo "<br>";
	        echo "<br>";
            echo "<br>";

echo '<i style="color:blue;font-size:30px;">
      EN already exists! </i> ';
	}
	else
	{

		$sql2 = "INSERT INTO user (en,name,surname) VALUES ('".$_POST["txtEN"]."','".$_POST["txtName"]."','".$_POST["txtSurname"]."')";
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
