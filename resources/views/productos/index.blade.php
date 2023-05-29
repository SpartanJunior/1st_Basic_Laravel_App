<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Productos</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Lista de Productos</h1>

        <!-- Botón para añadir nuevo producto -->
        <a href="{{ route('productos.create') }}" class="btn btn-primary">Agregar Producto</a>
        
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Producto 1</td>
                    <td>Descripción del Producto 1</td>
                    <td>$19.99</td>
                    <td>
                    <a href="{{ route('productos.show', 1) }}" class="btn btn-link">
                        <i class="fa fa-eye" aria-hidden="true"></i> Ver detalles
                    </a>
                    <button class="btn btn-primary" onclick="confirmarCompra(1)">
                        Comprar
                    </button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Producto 2</td>
                    <td>Descripción del Producto 2</td>
                    <td>$24.99</td>
                    <td>
                    <a href="{{ route('productos.show', 2) }}" class="btn btn-link">
                        <i class="fa fa-eye" aria-hidden="true"></i> Ver detalles
                    </a>
                    <button class="btn btn-primary" onclick="confirmarCompra(2)">
                        Comprar
                    </button>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Producto 3</td>
                    <td>Descripción del Producto 3</td>
                    <td>$14.99</td>
                    <td>
                    <a href="{{ route('productos.show', 3) }}" class="btn btn-link">
                        <i class="fa fa-eye" aria-hidden="true"></i> Ver detalles
                    </a>
                    <button class="btn btn-primary" onclick="confirmarCompra(3)">
                        Comprar
                    </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <script>
        function confirmarCompra(id) {
            if (confirm("¿Estás seguro de que deseas comprar este producto?")) {
                mostrarCompraExitosa();
            }
        }

        function mostrarCompraExitosa() {
            alert("¡Compra exitosa!");
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>