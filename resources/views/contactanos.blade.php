<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div class="mx-auto mt-5 text-center">
        <h1>Bienvenido a la parte contactanos</h1>
    </div>
    <form action="{{ route('store') }}" method="POST">

        @csrf

        <label for="">
            Nombre:
            <br>
            <input type="text" name="name">
        </label>
        <br>


        <label for="">
            Correo:
            <br>
            <input type="text" name="correo">
        </label>
        <br>



        <label for="">
            Mensaje:
            <br>
            <textarea name="mensaje" cols="30" rows="10"></textarea>
        </label>
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>

</html>
