<!DOCTYPE html>
<html lang="es-CO">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body style="margin-top: 30px; background: rgb(247, 246, 222); display: flex; justify-content: center;">
    <div class="container">
        <h1>Lista de Usuarios</h1>
        <a href="{{ route('usuarios.create') }}" class="btn btn-primary">Crear usuario</a>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th></th>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Rol</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <tr>
                    <th scope="row"><div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        </div></th>
                    <td>219034046</td>
                    <td>Jhonattan Gabriel Benavides Concha</td>
                    <td>yhonygbc@gmail.com</td>
                    <td>Administrador</td>
                </tr>
                <tr>
                    <th scope="row"><div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        </div></th>
                    <td>219034189</td>
                    <td>Juan Pablo Guzmán Rosero</td>
                    <td>jguzman@udenar.edu.co</td>
                    <td>Usuario</td>
                </tr>
            </tbody>
        </table>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>