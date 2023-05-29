<!DOCTYPE html>
<html lang="es-CO">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body style="margin-top: 30px; background: fixed; background-color:rgb(247, 246, 222);">
    <div>
        <form action="" method="post" autocomplete="on" style="display: flex; justify-content: center; text-align: center;">
            <fieldset>
                <legend><h1>Nuevo usuario</h1></legend>
                <div class="row">
                    <div class="col">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="firstnames" name="firstnames" placeholder="Nombres completos" size="1" required 
                            style="resize: horizontal; width: 180px;">
                            <label for="firstnames">Código o ID</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="lastnames" name="lastnames" placeholder="Apellidos completos" required
                            style="resize: horizontal; width: 540px;">
                            <label for="lastnames">Nombre</label>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="firstnames" name="firstnames" placeholder="Nombres completos" required>
                            <label for="firstnames">Correo electrónico</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-floating">
                            <select id="municipalityOfBirth" class="form-select" >
                                <option selected>Seleccione una opción</option>
                                <option value="1">Administrador</option>
                                <option value="2">Usuario</option>
                            </select>
                            <label for="municipalityOfBirth">Rol</label>
                        </div>
                    </div>
                </div>
        </form>    
    </div>
    
    <div style="display: flex; justify-content: center; margin-top: 20px;">
        <a href="{{ route('usuarios.index') }}"><button class="btn btn-primary" style="margin-right: 5px;">Crear usuario</button></a>
        <a href="{{ route('usuarios.index') }}"><button class="btn btn-primary" style="margin-right: 5px;">Regresar</button></a>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>