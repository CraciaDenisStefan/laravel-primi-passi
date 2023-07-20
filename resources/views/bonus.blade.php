<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
        <title>Secondo saluto</title>
    </head>
    <body>
        <div class="container my-5">
            <h3>Saluto inserito di nuovo :</h3>
            <h1>{{$saluto}} {{$mondo}} {{$biss}}</h1>
            <a href="/" class="btn btn-primary my-4" tabindex="-1" role="button" >Torna al primo saluto</a>
        </div>
    </body>
</html>