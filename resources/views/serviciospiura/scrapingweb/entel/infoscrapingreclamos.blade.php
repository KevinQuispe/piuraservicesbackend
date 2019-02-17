@extends('layouts.master')
@section('title','Nueva')
@section('content')
<div class="container">
<section>
    <h3><center>WEB SCRAPING INFORMACIÓN DE RECLAMOS-ENTEL<center></h3>
    <hr>
<script>
  function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;
     document.body.innerHTML = printContents;
     window.print();
     document.body.innerHTML = originalContents;
  }
</script>
<input class="btn btn-danger pull-right" type="button" onclick="printDiv('printableArea')" value="Guardar PDF" />
    <div id="printableArea">
      <h3>Información de reclamos ENTEL <a href="http://www.entel.pe/personas/ayuda-y-soporte/reclamos-y-solicitudes/como-presentar-un-reclamo/" target="_blank">-Ver Sitio web</a></h3>
      <hr>
<?php
  include_once('../app/phpdom/simple_html_dom.php');                   
  // Create DOM from URL or file
   // URL solicitar reclamos y slicitudes
  $htmlsolicitudes = file_get_html('http://www.entel.pe/personas/ayuda-y-soporte/reclamos-y-solicitudes/');
  // URL solicitar un reclamo
  $htmlreclamos = file_get_html('http://www.entel.pe/personas/ayuda-y-soporte/reclamos-y-solicitudes/como-presentar-un-reclamo/');
  
  // print_r('Titulos headear');
  $titulosH1 = array();
  foreach($htmlreclamos->find(".bloque-der h1") as $titulo) {
    $titulosH1[] = $titulo->plaintext;
   }
  //  print_r($titulosH1); como presentar un reclamo
   print_r("<h1>".$titulosH1[0]."</h1>");
   $etiquetaP = array();
   foreach($htmlreclamos->find(".bloque-der p") as $titulo) {
     $etiquetaP[] = $titulo->plaintext;
    }
  //print_r($etiquetaP);
  print_r("<br>");
  //contenido del reclamo
  print_r("<p>".$etiquetaP[0]."</p>"); 
  // problemas de reclamos
  $tituloTabs = array();
  foreach($htmlreclamos->find(".bloque-der .tabs-tabla ul li a") as $titulo) {
    $tituloTabs[] = $titulo->plaintext;
   }
  //print_r($tituloTabs);
  print_r("<h2 style='color:orange'>".$tituloTabs[0]."</h2>"); 
  //lista para problemas li
  //print_r("<br>array listas<br/>");
  $listas = array();
  foreach($htmlreclamos->find(".bloque-der .tab-content ul li") as $titulo) {
    $listas[] = $titulo->plaintext;
   }
  //print_r($listas);
  print_r("<ul><li>".$listas[0]."</li><li>".$listas[1]."</li><li>".$listas[2]."</li></ul>");
  //pasos par problemas
  //print_r("ARREGLO PASOS: <br>");
  $pasos = array();
  foreach($htmlreclamos->find(".bloque-der .aco-caja p") as $titulo) {
    $pasos[] = $titulo->plaintext;
   }
  //print_r($pasos);
  print_r("<br>");
  $subTitulosPasos = array();
  foreach($htmlreclamos->find(".bloque-der h2") as $titulo) {
    $subTitulosPasos[] = $titulo->plaintext;  
   }
  //print_r($subTitulosPasos);
  print_r("<h3>".$subTitulosPasos[0]."</h3>");
  print_r("<ol><li>".$pasos[1]."</li>");
  print_r("<li>".$pasos[3]."</li>");
  print_r("<li>".$pasos[5]."<ul><li>".$listas[3]."</li><li>".$listas[4]."</li></ul></li>");
  print_r("<li>".$subTitulosPasos[2]."<p>".$pasos[8]."</p><ul><li>".$listas[6]."</li><li>".
  $listas[7]."</ul><p>".$pasos[9]."</p><ul><li>".$listas[9]."</li><li>".$listas[10]."</li></ul></ol>");
  
  //si no estas de acuerdo
  $tituloapelacion = array();
  foreach($htmlreclamos->find("bloque-der ul li p") as $titulo) {
    $tituloapelacion[] = $titulo->plaintext;
   }
   //print_r("<h3>".$tituloapelacion[0]."</h3>");
   print_r($tituloapelacion);
   $listaapelacion = array();
   foreach($htmlreclamos->find(".contenido-general h2") as $titulo) {
     $listaapelacion[] = $titulo->plaintext;
    }
    print_r($listaapelacion);
  //
    print_r("<p>".$listaapelacion[1]."</p>");
    print_r("<p>".$listaapelacion[2]."</p>");
    $listageneral = array();
    foreach($htmlreclamos->find(".contenido-general ul li") as $titulo) {
      $listageneral[] = $titulo->plaintext;
     }
     print_r($listageneral);  
     print_r($listageneral[23]);  
  ?>
  
</section>
</div>
@endsection