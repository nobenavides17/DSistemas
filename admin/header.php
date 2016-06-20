<?php 
	require("session.php");
	include("log.php");
	$log = new Log("log", "log/");	
	
?>
<!DOCTYPE html>
<html lang="es"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Sistema de Valuacion de Inmuebles</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Pagina web de compra venta">
    <meta name="author" content="NOBenavides">

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/jquery-ui.css" rel="stylesheet">
    <style type="text/css">
      input[type=number]::-webkit-outer-spin-button,
      input[type=number]::-webkit-inner-spin-button {
          -webkit-appearance: none;
          margin: 0;
      }

      input[type=number] {
          -moz-appearance:textfield;
      }
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }
      #acordion div{
        height: 60px;
      }
       #acordion div ul{
         list-style: none;
         margin-left: 0px;
        }
      #acordion div ul li a{
          text-decoration: none;
          color:#FFF;
        }
      #acordion div ul li a:hover{
          color:#0FF;
        }

      @media (max-width: 980px) {
        /* Enable use of floated navbar text */
        .navbar-text.pull-right {
          float: none;
          padding-left: 5px;
          padding-right: 5px;
        }
      
      }
    </style>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/simple-sidebar.css" rel="stylesheet">
     <script src="js/jquery.js"></script>
     <script src="js/script.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/bootstrap.js"></script>   
  </head>


  <body >

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="index.php" style="color:#FFF;">Sistema de Valuacion de Bienes Inmuebles</a>
          <div class="nav-collapse collapse">
            <p class="navbar-text pull-right">
              <a href="logout.php" class="navbar-link" style="color:#FFF;"><?php echo $_SESSION["user"];?> (Salir)</a>
            </p>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
        <div class="container-fluid">
      <div class="row-fluid">
        <div class="span3">
          <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="index.php" style="color:#FFF; font-weight:bold;">Inicio</a>
                </li>
                 <li>
                    <a href="admin.php" style="color:#FFF; font-weight:bold;">Parametros de gestion</a>
                </li>
                 <li>
                    <a href="admin_user.php" style="color:#FFF; font-weight:bold;">Usuarios</a>
                </li>
                 <li>
                    <a href="admin_valuo.php" style="color:#FFF; font-weight:bold;">Valuos</a>
                </li>
                 <li>
                    <a href="view_report.php" style="color:#FFF; font-weight:bold;">Reportes</a>
                </li>
                 <li>
                    <a href="backup.php" style="color:#FFF; font-weight:bold;">Copia de Respaldo</a>
                </li>
            </ul>
        </div>
        </div><!--/span-->
        <div class="span9">
    
