<?php 

function printHeader($isPage = false){

$directory = ($isPage) ? "../": "";

    $header = <<<EOF
    <html lang="es"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Williams Caro and ITLA contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>Estudiantes  · ITLA</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="{$directory}assents/css/bootstrap.min.css">
    <!-- CSS -->
    <link rel="stylesheet" href="{$directory}assents/css/style.css" type="text/css">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/4.5/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/4.5/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/4.5/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
<link rel="icon" href="/docs/4.5/assets/img/favicons/favicon.ico">
<meta name="msapplication-config" content="/docs/4.5/assets/img/favicons/browserconfig.xml">
<meta name="theme-color" content="#563d7c">

  </head>
  <body>
    <header>
  <div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
          <h4 class="text-white">Sobre Nosotros</h4>
          <p class="text-muted">“En el ITLA estamos comprometidos con la satisfacción de las necesidades y expectativas de nuestros estudiantes, por medio de la mejora continua de nuestros procesos académicos”</p>
        </div>
        <div class="col-sm-4 offset-md-1 py-4">
          <h4 class="text-white">Contact</h4>
          <ul class="list-unstyled">
            <li><a href="#" class="text-white">Follow on Twitter</a></li>
            <li><a href="#" class="text-white">Like on Facebook</a></li>
            <li><a href="#" class="text-white">Email me</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container d-flex justify-content-between">
      <a href="{$directory}index.php" class="navbar-brand d-flex align-items-center">
      
      
      <img class=logoimg src="{$directory}assents\img\Logo_Color_Full-min.png" alt="Portada Itla">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </div>
</header>
EOF;
    echo $header;
}



function printFooter($isPage = false){
  $directory = ($isPage) ? "../": "";

    $footer = <<<EOF

    <footer class="text-muted">
    <div class="container">
      <p class="float-right">
        <a href="#">Volver Arriba</a>
      </p>
      <p>ITLA orienta su vocación a transformar la vida de la juventud dominicana mediante una formación académica!  </p>
    </div>
  </footer>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="/docs/4.5/assets/js/vendor/jquery.slim.min.js"><\/script>')</script>
        <script src="{$directory}assents\js\bootstrap.min.js"></script>
  
  </body>
  </html>


EOF;
    echo $footer;
}




?>