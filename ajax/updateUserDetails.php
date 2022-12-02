<?php
    include("db_connection.php");

    if(isset($_POST))
    {
        $id = $_POST['id'];
        $nombres=$_POST['nombres'];
        $apellidos=$_POST['apellidos'];
        $email=$_POST['email'];
        $salario=$_POST['salario'];   
    

        $query = "UPDATE usuarios SET nombres='$nombres', apellidos='$apellidos', email = '$email', salario = '$salario' WHERE id = '$id'";
        if (!$result = mysqli_query($con, $query)) 
        {
            exit(mysqli_error($con));
        }
    }