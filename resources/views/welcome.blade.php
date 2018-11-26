<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Danku Sinterklaasje, donaties en traktaties</title>

        <!-- Fonts -->
    

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

              <section class="jumbotron text-center">
              <h3> Recent gedoneerd </h3><br>
              <div class="album py-5">
                    <div class="container">
            
                      <div class="row">
                        <div class="col-md-4">
                          <div class="card mb-4 shadow-sm">
                            <img class="card-img-top" img src="https://www.ladylemonade.nl/wp-content/uploads/2016/10/fiets-kinderfiets-kind-jongen-meisje-verjaardag-inch-kwaliteit-winnen-cruiser-prinsessenfiets-roze-zwart-ladylemonade_nl2.jpg" alt="Card image cap">
                            <div class="card-body">
                              <p class="card-text">Nieuwe fietsje voor kleine kinderen</p>
                              <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                </div>
                                <small class="text-muted">gedoneerd door <i>anoniem</i></small>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="card mb-4 shadow-sm">
                            <img class="card-img-top" img src="https://colbo.nl/wp-content/uploads/2017/02/ravensburger-puzzel-afrikaanse-wildernis-1000.jpg" alt="Card image cap">
                            <div class="card-body">
                              <p class="card-text">Leuke dierenpuzzel van duizend stukjes.</p>
                              <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                </div>
                                <small class="text-muted">gedoneerd door <i> de familie van Rik</i></small>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="card mb-4 shadow-sm">
                            <img class="card-img-top" img src="https://rukminim1.flixcart.com/image/832/832/j1b0xow0/gamingconsole/s/v/g/playstation-4-ps4-slim-500-sony-dual-stock-4-controller-original-imaeswrwgwymjedc.jpeg?q=70" alt="Card image cap">
                            <div class="card-body">
                              <p class="card-text">Gloednieuwe Playstation 4, met 2 controllers. Perfect voor een gezin met meerdere kinderen.</p>
                              <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                </div>
                                <small class="text-muted">gedoneerd door <i>CodeGorilla</i></small>
                              </div>
                            </div>
                          </div>
                        </div>   
                        <div class="album py-5">
                          <div class="container">
                  
                            <div class="row">
                              <div class="col-md-4">
                                <div class="card mb-4 shadow-sm">
                                  <img class="card-img-top" src="https://peppapigshop.nl/wp-content/uploads/sites/11/2016/05/Peppa-Pig-knuffels-Familie-Pig-1.jpg" alt="Card image cap">
                                  <div class="card-body">
                                    <p class="card-text">Knuffelset van de tekenfilmserie Peppa Pig.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                      <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                      </div>
                                      <small class="text-muted">gedoneerd door <i>anoniem</i></small>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="card mb-4 shadow-sm">
                                  <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
                                  <div class="card-body">
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                      <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                      </div>
                                      <small class="text-muted">9 mins</small>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="card mb-4 shadow-sm">
                                  <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
                                  <div class="card-body">
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                      <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                      </div>
                                      <small class="text-muted">9 mins</small>
                                    </div>
                                  </div>
                                </div>
                              </div>

                      </section>   
              @endsection
    </body>
</html>
