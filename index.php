<?php 
include './lib/constantes.php';
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link href="css/estiloprincipal.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div id="General">
            <div id="Cabecera">
                
                <h1>Hostal Rio Amazonas</h1>
            </div>
            <div id="Menu">
                <?php include './Menu.php';?>
            </div>
            <div id="Contenido">
                
            </div>
            <div id="PiePagina">
                Antonio Varas #666, Fono de contacto: 000000000
            </div>
        </div>
        
        <!--<script>
            $("#pagHome").on( "click", function( event ) {
                
            }
            $("#pagAboutChile").on( "click", function( event ) {
                
            }
            $("#pagReservation").on( "click", function( event ) {
                
            }
            $('[data-toggle="tooltip"]').tooltip(); 
        </script>-->
        <?php
        // put your code here
        ?>
    </body>
</html>
