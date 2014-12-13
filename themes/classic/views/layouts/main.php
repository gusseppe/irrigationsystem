<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  
  <!--Ultimo motor de renderizacion-->
  <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
  
  <!--Mobile viewport optimized-->
  <meta name="viewport" content="width=device-width">
  <title><?php echo $this->pageTitle;?>System</title>
  <meta name="description" content="Comparte y aprende" />
  <meta name="keywords" content="Universidad" />
  
  <!--Fonts de google-->
  <!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'> -->
  
  <!--CSS de toda la web-->
  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl;?>/CSS/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl;?>/CSS/bootstrap-responsive.css">
  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl;?>/CSS/bootmetro.css">
  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl;?>/CSS/bootmetro-tiles.css">
  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl;?>/CSS/bootmetro-charms.css">
  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl;?>/CSS/metro-ui-light.css">
  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl;?>/CSS/icomoon.css">
  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl;?>/CSS/home.css">
  
  <!-- Favicon en la pagina -->
  <link rel="shortcut icon" href="<?php echo Yii::app()->theme->baseUrl;?>/Logo/favicon.ico" type="image/ico">

</head>
<body>
    <!--Barra de navegacion inicial-->
    <div class="navbar">
       <div class="navbar-inner"> 
         <a class="brand" href="<?php echo Yii::app()->theme->baseUrl;?>/main.php">&nbsp&nbsp&nbsp System</a>
         <img id="logo" src="<?php echo Yii::app()->theme->baseUrl;?>/Logo/logo.png" width = "26px" height="26px"></img>
         <ul class="nav">
           <li class="active"><a href="<?php echo Yii::app()->theme->baseUrl;?>/views/layouts/main.php">Inicio</a></li>
           <li><a href="#">Conócenos</a></li>

         </ul>
       </div>
     </div>

    <div class="header">
        <h1>Irrigation system.</h1>
        <p>Este sistema permite dosificar y automatizar el riego de parcelas de sembríos.</br>
           </br>   
        </p>
    </div>  
    <hr>
    <!--Parte central inferior, 4 botones azules de enlaces-->
    <div class="metro">
      <a class="tile square text tilesquareblock" href="<?php echo Yii::app()->theme->baseUrl;?>/HTML/universidad/universidad.html">
        <div class="text5">Programar Horarios</div>
      </a>
      <a class="tile square text tilesquareblock" href="<?php echo Yii::app()->theme->baseUrl;?>/HTML/acadcepre/acadcepre.html">
        <div class="text5">Consultar reporte por Parcela</div>
      </a> 
       <a class="tile square text tilesquareblock" href="<?php echo Yii::app()->theme->baseUrl;?>/HTML/colegio/colegio.html">
        <div class="text5">Consultar reporte global</div>
      </a>
  
    </div><!--Fin de metro-->

  <!--Footer-->
  <!-- <footer class="foot">&copy; Pagina web creada por TODOS.</footer> -->
  
  <!--Scripts al final, para mejorar la velocidad-->
  <script src="<?php echo Yii::app()->theme->baseUrl;?>/scripts/modernizr-2.6.1.min.js"></script>
  <script href="<?php echo Yii::app()->theme->baseUrl;?>/JSS/funciones.js"></script>



</body>
</html>
