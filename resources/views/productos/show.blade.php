<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Producto</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Detalles del Producto</h1>
        
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">El Gran Gatsby</h5>
                <p class="card-text"><strong>Autor:</strong> F. Scott Fitzgerald</p>
                <p class="card-text"><strong>Editorial:</strong> Scribner</p>
                <p class="card-text"><strong>Año de publicación:</strong> 1925</p>
                <p class="card-text"><strong>Género:</strong> Novela</p>
                <p class="card-text"><strong>Precio:</strong> $15.99</p>
                <p class="card-text"><strong>Descripción:</strong> El Gran Gatsby es una novela escrita por F. Scott Fitzgerald que retrata la vida de Jay Gatsby en la década de 1920 en Nueva York. Es considerada una de las obras maestras de la literatura estadounidense.</p>
                <p class="card-text"><strong>ISBN:</strong> 978-0743273565</p>
            </div>
        </div>

        <a href="{{ route('productos.index') }}" class="btn btn-primary">Volver</a>
    </div>  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>