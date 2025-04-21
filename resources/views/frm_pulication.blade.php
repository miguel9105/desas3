<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('Publication.respuesta_publi')}}" method="post" enctype="multipart/form-data" >
    @csrf
    <label for="">
        titulo
        <input type="text" name="title">
    </label>
    
    <label for="">
        desccription
        <input type="text" name="description">
    </label>

    <label for="">
        description
        <input type="text" name="url_img">
    </label>
    <label for="">
        fecha publicacion
        <input type="date" name="date_publication">
    </label>
    <label for="">
        ubicacion
        <input type="text" name="ubication">
    </label>
    <button>enviar</button>
    </form>
</body>
</html>
