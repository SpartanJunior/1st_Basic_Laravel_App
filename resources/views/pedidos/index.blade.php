<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Pedidos</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Lista de Pedidos</h1>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Cliente</th>
                    <th>Fecha</th>
                    <th>Total</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Cliente 1</td>
                    <td>2023-05-28</td>
                    <td>$50.00</td>
                    <td>
                        <a href="" class="btn btn-link">
                            <i class="fa fa-eye" aria-hidden="true"></i> Ver detalles
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Cliente 2</td>
                    <td>2023-05-27</td>
                    <td>$75.00</td>
                    <td>
                        <a href="" class="btn btn-link">
                            <i class="fa fa-eye" aria-hidden="true"></i> Ver detalles
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Cliente 3</td>
                    <td>2023-05-26</td>
                    <td>$100.00</td>
                    <td>
                        <a href="" class="btn btn-link">
                            <i class="fa fa-eye" aria-hidden="true"></i> Ver detalles
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>