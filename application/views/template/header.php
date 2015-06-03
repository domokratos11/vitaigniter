<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= $titulo?></title>
    <!-- Bootstrap core CSS -->
    <link href="<?= base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">

      <!-- Static navbar -->
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Clinica Vitalite</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <?= menu_ul(1); ?>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="./">Default <span class="sr-only">(current)</span></a></li>
              <li><a href="../navbar-static-top/">Static top</a></li>
              <li><a href="../navbar-fixed-top/">Fixed top</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>

      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
        
      </div>


