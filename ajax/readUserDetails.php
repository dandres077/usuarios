<?php
    include("db_connection.php");


    if(isset($_POST['id']) && isset($_POST['id']) != "")
    {

        $id = $_POST['id'];

        $query = "SELECT * FROM usuarios WHERE id = '$id'";
        if (!$result = mysqli_query($con, $query)) 
        {
            exit(mysqli_error($con));
        }

        $response = array();

        if(mysqli_num_rows($result) > 0) 
        {
            while ($row = mysqli_fetch_assoc($result)) 
            {
                $response = $row;
            }
        }
        else
        {
            $response['status'] = 200;
            $response['message'] = "Sin datos";
        }

        echo json_encode($response);
    }
    else
    {
        $response['status'] = 200;
        $response['message'] = "Error en la petición";
    }