<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale-1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Crear producto
                </div>
                <div class="card-body">
                    <form action="{{ route('products.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="description">Descripción</label>
                            <input type="text" class="form-control" name="description">
                        </div>
                        <div class="form-group">
                            <label for="price">Precio</label>
                            <input type="number" class="form-control" name="price">
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm">Guardar</button>
                        <a href="{{ route('products.index') }}" class="btn btn-danger btn-sm">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>