// Función para el registro de usuarios
function addRecord() 
{
    var nombres = $("#nombres").val();
    var apellidos = $("#apellidos").val();
    var email = $("#email").val();
    var salario = $("#salario").val();

    $.post("ajax/addRecord.php", {
        nombres: nombres,
        apellidos: apellidos,
        email: email,
		salario: salario
    }, function (data, status) {

        $("#add_new_record_modal").modal("hide");

        readRecords();

        $("#nombres").val("");
        $("#apellidos").val("");
        $("#email").val("");
        $("#salario").val("");
    });
}

// Función para leer registros
function readRecords() 
{
    $.get("ajax/readRecord.php", {}, function (data, status) {
        $("#records_content").html(data);
    });
}

// Función para eliminar registros
function DeleteUser(id) 
{
    var conf = confirm("¿Está seguro, realmente desea eliminar el registro?");
    if (conf == true) {
        $.post("ajax/deleteUser.php", {
                id: id
            },
            function (data, status) {
                // reload Users by using readRecords();
                readRecords();
            }
        );
    }
}

// Función para ver los detalles de un registro
function GetUserDetails(id) {
    
    $("#hidden_user_id").val(id);
    $.post("ajax/readUserDetails.php", 
    {
        id: id
    },
        function (data, status) 
        {
            var user = JSON.parse(data);

            $("#update_nombres").val(user.nombres);
            $("#update_apellidos").val(user.apellidos);
            $("#update_email").val(user.email);
            $("#update_salario").val(user.salario);
        }
    );

    $("#update_user_modal").modal("show");
}


//Función para actualizar un registro
function UpdateUserDetails() 
{
    var nombres = $("#update_nombres").val();
    var apellidos = $("#update_apellidos").val();
    var email = $("#update_email").val();
    var salario = $("#update_salario").val();

    var id = $("#hidden_user_id").val();

    $.post("ajax/updateUserDetails.php", 
    {
        id: id,
        nombres: nombres,
        apellidos: apellidos,
        email: email,
        salario: salario
    },
    function (data, status) 
    {
        $("#update_user_modal").modal("hide");
        readRecords();
    }
    );
}

$(document).ready(function () 
{
    readRecords(); 
});


//Función para calcular el sario de los usuarios seleccionados
function calcular() {
    var tot = $('#total');
    tot.val(0);
    $('.checkboxes').each(function() {
      if($(this).hasClass('checkboxes')) {
        tot.val(($(this).is(':checked') ? parseFloat($(this).attr('tu-attr-precio')) : 0) + parseFloat(tot.val()));  
      }
      else {
        tot.val(parseFloat(tot.val()) + (isNaN(parseFloat($(this).val())) ? 0 : parseFloat($(this).val())));
      }
    });
    var totalParts = parseFloat(tot.val()).toFixed(2).split('.');
    tot.val('$' + totalParts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",") + '.' +  (totalParts.length > 1 ? totalParts[1] : '00'));  
  }