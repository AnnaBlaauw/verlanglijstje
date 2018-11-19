<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Danku Sinterklaasje, donaties en traktaties</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        
       
    </head>
    <body>
       
    

        @extends('layouts.app')

        <!-- call to action deel bootstrap -->
        @section('content')
            
        
        <section class="jumbotron text-center">
                <div class="container">
                  <h1 class="jumbotron-heading">Dank u, Sinterklaasje!</h1>
                  <p class="lead text-muted">Welkom op </p>
                  <p>
                    <a href="/lijstje" class="btn btn-primary my-2">Stel hier je verlanglijstje samen</a>
                    <a href="/doneer" class="btn btn-primary my-2">Doneer aan Sinterklaas</a>
                  </p>
                </div>
              </section>
              @endsection
    </body>
</html>
