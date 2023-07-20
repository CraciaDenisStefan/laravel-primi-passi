<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
        <title>Laravel</title>
    </head>
    <body>
    


<header>
<div class="container my-5">
<a href="/bonus" class="btn btn-primary" tabindex="-1" role="button" >Vai sulla seconda pagina per un altro saluto</a>
<a href="/bonus2" class="btn btn-primary" tabindex="-1" role="button" >Vai qui invece se vuoi vedere la mia faccia !</a>
</div>
</header>
<main>
    <div class="container">

    <h1>Hello world</h1>
<hr>
    <h3>Saluto inserito :</h3>
    <h1>{{$saluto}} {{$mondo}}</h1>
    </div>
</main>

    </body>
</html>
