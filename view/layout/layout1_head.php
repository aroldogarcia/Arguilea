<!DOCTYPE html>
<html>
    <head>
        <title> Test tecnico </title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta charset="utf-8">
        <meta content="ie=edge" http-equiv="x-ua-compatible">
        <meta content="Arguilea" name="keywords">
        <meta content="Enrique Aroldo Garcia Vallecillo" name="author">
        <meta content="Technique test for Arguilea" name="description">
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <!-- CDN -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- Stykes -->
        @yield('styles')
    </head>
    <body>
        <div class="content">
            <!-- HEADER -->
            <div class="container-fluid" >
                <div class="row">
                    <!-- revisar por que no funciona el logo -->
                    <div class="col-3 text-dark" >
                        <a href="{{ url('/') }}">
                            <img src="{{ asset('images/resources/uaelogo.JPG') }}" alt="UAEHLOGO">
                        </a>
                    </div>
                    <div class="col-1 text-light" style = "background: #e24622;">
                        
                    </div>
                    <div class="col-8 text-light text-right" style = "background: #b91116;">
                        <!-- Revisar por que no se alinea a la derecha y por que no toma le color -->
                        <ul class="list-group list-group-horizontal" style = " list-style-type: none;" >
                            <li>
                                <a href="#" style="text-decoration: none;">|   Buscar   |</a>
                            </li>
                            <li>
                                <a href="#" style="text-decoration: none;">|   Libro   |</a>
                            </li>
                            <li>
                                <a href="{{ url('/biblioteca') }}" style="text-decoration: none;">|   Actualizar   |</a>
                            </li>
                            <li>
                                <a href="#" style="text-decoration: none;">|   Bibliotecas   |</a>
                            </li>
                        </ul>
                    </div>
                </div>
                
            </div>
            <!-- CONTENT -->
            <div class="container-fluid">