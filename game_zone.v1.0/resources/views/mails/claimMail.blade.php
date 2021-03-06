<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <title>Reclamo de Pedido</title>
</head>
<body>
    <p>Se recepcionado un reclamo del usuario {{$user_name}} con el correo {{$user_mail}} :</p>
    <div class="container">
        <div class="col-md-4">
            <h2 class="text-white-50">Pedido: N°000{{$order->id}}</h2>
        </div>
        <div class="col-md-4">
            <h2 class="text-white-50">Fecha: {{$order->date_realization}}</h2>
        </div>
        <div class="col-md-4">
            <h2 class="text-danger">Asunto del Reclamo: {{$body['affair']}}</h2>
        </div>
        <div class="col-md-8">
            <p class="text-danger">Descripción: {{$body['description']}}</p>
        </div>
    </div>
</body>
</html>