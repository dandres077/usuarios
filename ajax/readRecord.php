<?php
	include("db_connection.php");

	$data = '<table class="table table-bordered table-striped">
				<tr>
					<th>Id</th>
					<th>Nombres</th>
					<th>Apellidos</th>
					<th>Email</th>
					<th>Salario</th>
					<th align="center">Seleccionar</th>
					<th></th>
				</tr>';

	$query = "SELECT * FROM usuarios";

	if (!$result = mysqli_query($con, $query)) {
        exit(mysqli_error($con));
    }


	if(mysqli_num_rows($result) > 0)
    {
    	$number = 1;
    	while($row = mysqli_fetch_assoc($result))
    	{
    		$data .= '<tr>
				<td>'.$row['id'].'</td>
				<td>'.$row['nombres'].'</td>
				<td>'.$row['apellidos'].'</td>
				<td>'.$row['email'].'</td>
				<td>'.$row['salario'].'</td>
				<td align="center"><input type="checkbox" tu-attr-precio="'.$row['salario'].'" class="checkboxes"/></td>
				<td>
					<button onclick="GetUserDetails('.$row['id'].')" class="btn btn-warning"><i class="fas fa-edit"></i></button>
				</td>
				<td>
					<button onclick="DeleteUser('.$row['id'].')" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
				</td>
    		</tr>';
    		$number++;
    	}
    }
    else
    {
      	$data .= '<tr><td colspan="6">No hay registros!</td></tr>';
    }

    $data .= '</table>';

    echo $data;
