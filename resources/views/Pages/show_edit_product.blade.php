<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
</body>
</html>

<div>
    <form action="{{url('Update'. $object->id)}}" method="POST" class="form" style="width: 800px; position: relative;left: 10px;">
        @csrf
        <label for="product_name" class="form-text">Nombre de Producto</label>
        <input id="product_name" type="text" value="{{$object->ProductName}}" class="form-control mt-2  p-1" name="product_name">
        <label for="supplier_id" class="form-text">Proveedor</label>
        <input id="supplier_id" type="text" value="{{$object->SupplierID}}" class="form-control mt-2  p-1" name="supplier">
        <label for="category_id" class="form-text">Categoría</label>
        <input id="category_id" type="text" value="{{$object->CatedoryID}}" class="form-control mt-2  p-1" name="category">
        <label for= "unit" class="form-text">Unidad</label>
        <input id="unit" type="number" value="{{$object->Unit}}" class="form-control mt-2  p-1" name="unit">
        <label for="price" class="form-text">Precio</label>
        <input id="price" step="0.01" type="number" value="{{$object->Price}}" class="form-control mt-2  p-1" name="price">
        <button type="submit" class="btn btn-danger mt-3">Actualizar</button>
        <a href="{{url('List-Products')}}"><button type="button" class="btn btn-primary mt-3">Volver</button></a>
    </form>
</div>