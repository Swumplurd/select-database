$(document).ready(() => {

    $('#agregar').click(() => {
        if ($('#basedatos').val() == 0) {
            var ruta = "./control/nombre.php"
        }else if ($('#basedatos').val() == 1) {
            var ruta = "./control/nombre1.php"
        }else if ($('#basedatos').val() == 2) {
            var ruta = "./control/nombre2.php"
        }
        
        $.ajax({
            'url' : ruta,
            data : {
                'nombre': $('#nombre').val()
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