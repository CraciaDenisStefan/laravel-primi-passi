<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
        <title>La mia faccia</title>
    </head>
    <body>
        <div class="container my-5">
            <img class="rounded-circle shadow-lg p-2 m-4" src="{{$faccia}}" alt="">
            <a href="/" class="btn btn-primary my-4" tabindex="-1" role="button" >Torna al primo saluto</a>
        </div>
    </body>
</html>