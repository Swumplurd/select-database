<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Nombre</title>
</head>
<body>
    <h1 class="display-4 my-4 text-center">Registros en bases de datos diferentes</h1>
    <div class="container">
        <div class="row">
            <div class="col-6 offset-3">
                <div class="card text-dark bg-light">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="basedatos">Selecciona una BD</label>
                            <select class="form-control" name="basedatos" id="basedatos">
                                <option value="nombres">Base de datos #1</option>
                                <option value="nombres1">Base de datos #2</option>
                                <option value="nombres2">Base de datos #3</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Introduce tu nombre" aria-describedby="helpId">
                            <small id="helpId" class="text-muted">Introduce tu nombre o nombres</small>
                            
                        </div>
                        <div>
                            <span id="agregar" class="btn btn-primary btn-block">Agregar</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="public/js/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="manager/main.js"></script>
</body>
</html>