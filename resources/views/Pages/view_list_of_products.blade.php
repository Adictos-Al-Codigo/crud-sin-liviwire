<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
</head>
<body>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre del Producto</th>
            <th scope="col">Proveedor/a</th>
            <th scope="col">Categoría</th>
            <th scope="col">Unidad</th>
            <th scope="col">Precio</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($products as $indice => $product)
            <tr>
              <th scope="row">{{$indice+1}}</th>
              <td>{{$product->ProductName}}</td>
              <td>{{$product->SupplierID}}</td>
              <td>{{$product->CatedoryID}}</td>
              <td>{{$product->Unit}}</td>
              <td>&dollar;{{$product->Price}}</td>
              <td>
                <a href="{{url('Edit'. $product->id)}}"><i class="bi bi-pencil-square"></i></a>
                <a href="{{url('Delete'. $product->id)}}"><i class="bi bi-trash3"></i></a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
      <a href="{{url('Ventas')}}" style="position: relative; left: 10px;"><button type="button" class="btn btn-danger">Volver</button></a>
</body>
</html>