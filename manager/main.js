$(document).ready(() => {

    $('#agregar').click(() => {
        $.ajax({
            url : './control/insertarNombre.php',
            data : {
                'nombre': $('#nombre').val(),
                'basedatos': $('#basedatos').val()
            },
            type : "post",
            success : (response) => {
                console.log(response);
            },
            error : (xhr, status) => {
                console.log(xhr, status);
            },
            complete : (xhr, status) => {
                console.log(xhr, status);
            }
        });
    });

});