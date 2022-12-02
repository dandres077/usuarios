<?php
	if(isset($_POST['nombres']) && isset($_POST['apellidos']) && isset($_POST['email']) && isset($_POST['salario']))
	{
		include("db_connection.php");

		$nombres = $_POST['nombres'];
		$apellidos = $_POST['apellidos'];
		$email = $_POST['email'];
		$salario = $_POST['salario'];

		$query = "INSERT INTO usuarios (nombres, apellidos, email, salario) VALUES('$nombres', '$apellidos', '$email', '$salario')";

		if (!$result = mysqli_query($con, $query)) 
		{
	        exit(mysqli_error($con));
	    }
	    echo "Registro exitoso!";
	}
