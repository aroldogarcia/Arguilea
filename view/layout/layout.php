
<!DOCTYPE html>
<html>
    <head>
        <!-- Elementos de head en la pagina -->
        <title> <?php echo $title; ?> </title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta charset="utf-8">
        <meta content="ie=edge" http-equiv="x-ua-compatible">
        <meta content="Codigos postales" name="keywords">
        <meta content="Enrique Aroldo Garcia Vallecillo" name="author">
        <meta content="description" name="description">
        <meta content="width=device-width, initial-scale=1" name="viewport">
        
        <!-- CDN's -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        
        <!-- Estilos -->
        <style>
            .bg_p_c{
                background: #e67c12;
            }
            .bg_s_c{
                background: #e6cd12;
            }
            <?php
                /* Se cargan estilos propios de cada llamada */
                echo $style;
            ?>
        </style>
    </head>
    <body>
        <div class="content">
            <!-- Header de la pagina -->
            <div class="container-fluid" >
                <div class="row">
                    <!-- revisar por que no funciona el logo -->
                    <div class="col-3 text-dark" >
                        <a href="{{ url('/') }}">
                            <img src="{{ asset('images/resources/uaelogo.JPG') }}" alt="UAEHLOGO">
                        </a>
                    </div>
                    <div class="col-1 text-light bg_s_c" >
                        
                    </div>
                    <div class="col-8 text-light text-right bg_p_c">
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
            
            <!-- Contenido de la pagina -->
            <div class="container-fluid">
                <?php
                    echo $content;
                ?>
            </div>

            <!-- Footer de la pagina -->
            <div class="container-fluid text-light" style = "background: #b91116;">
                <div class = "row">
                    <div class = "col-12 text-center">
                        <h3> Contacto </h3>
                        <div class = "row">
                            <div class = "col-6 text-left">
                                <p>
                                    <strong>Télefono: </strong> <br/>
                                    771 717 2000 <br/>
                                    <strong>Horario de atención: </strong><br/>
                                    Horario de atención de 8:00 a 14:30 hrs., de lunes a viernes. Para mayor información acuda a las instalaciones de Escuelas Preparatorias, Escuelas Superiores y demás institutos. <br/>
                                </p>
                            </div>
                            <div class = "col-6 text-left">
                                <p>
                                    <strong>Ubicación: </strong><br/> 
                                    Km. 4.5, Pachuca - Actopan, Campo de Tiro, 42039 Pachuca de Soto, Hgo. 
                                </p>
                            </div>
                        </div>
                        <h3> Redes sociales </h3>
                        <p>
                            <a href="#">facebook: <i class="fa-brands fa-facebook"></i></a>
                            <br/>
                            <a href="#">Página oficial: <i class="fa-solid fa-globe"></i></a>
                        </p>                        
                    </div>
                </div>                
            </div>
        </div>
        <!-- Script -->
        <?php
            echo $script;
        ?>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>