<?php

if(isset($_POST['id']) && isset($_POST['id']) != "")
{
    include("db_connection.php");

    $id = $_POST['id'];

    $query = "DELETE FROM usuarios WHERE id = '$id'";
    if (!$result = mysqli_query($con, $query)) 
    {
        exit(mysqli_error($con));
    }
}
