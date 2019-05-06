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
  // print_r($pasos);
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
  
  # O necesitas solucionar algo sobre:
  print_r("<h2 style='color:orange'>".$tituloTabs[1]."</h2>"); 
  print_r("<ul><li>".$listas[11]."</li><li>".$listas[12]."</li><li>".$listas[13].
  $listas[14]."</li><li>".$listas[15]."</li><li>".$listas[16].
  $listas[17]."</li><li>".$listas[18]."</li><li>".$listas[19].
  $listas[20]."</li></ul>");
  print_r("<ol><li>".$pasos[11]."</li>");
  print_r("<li>".$pasos[13]."</li></ol>");
  //si no estas de acuerdo
  $tituloapelacion = array();
  foreach($htmlreclamos->find("bloque-der ul li p") as $titulo) {
    $tituloapelacion[] = $titulo->plaintext;
   }
   //lista apelacion
   $listaapelacion = array();
   foreach($htmlreclamos->find(".contenido-general h2") as $titulo) {
     $listaapelacion[] = $titulo->plaintext;
    }  
    //no estas de acuerdo
    // print_r("<p>=======mis cambios========</p>");
    print_r("<b><p>".$listaapelacion[1]."</p></b>");
    $listageneral = array();
    foreach($htmlreclamos->find(".contenido-general ul li") as $titulo) {
      $listageneral[] = $titulo->plaintext;
     }
     //responder a los siguientes plazos
     print_r("<ol>.$listageneral[23].</ol>");
     print_r("<b><p>".$listaapelacion[2]."</p></b>");
     print_r("<ol>.$listageneral[24].</ol>");
     print_r("<ol>.$listageneral[26].</ol>");

    //  print_r("<p>necesitas solucionar</p>");
     $listaplazos = array();
    foreach($htmlreclamos->find(".tabs-tabla .clearfix li a") as $titulo) {
      $listaplazos[] = $titulo->plaintext;
     }
    //  print_r("<p>QUEJAS</p>");
     $quejas = array();
     foreach($htmlreclamos->find(" .tabs-tabla .clearfix li a") as $titulo) {
       $quejas[] = $titulo->plaintext;
      }
      print_r("<b><p>".$quejas[2]."</p></b>");
       
      //lista items quejas
      $listaquejas = array();
      foreach($htmlreclamos->find(" .tabs-tabla .clearfix li a") as $titulo) {
        $listaquejas[] = $titulo->plaintext;
       }
      //  print_r("<b><p>".$quejas[2]."</p></b>");
      // print_r($quejas);  

      //lista items quejas
      $tituloqueja = array();
      foreach($htmlreclamos->find(".tc-item .texto") as $titulo) {
        $tituloqueja[] = $titulo->plaintext;
       }
       print_r("<p>".$tituloqueja[6]."</p>");
      // print_r($tituloqueja);

      $listaqueja = array();
      foreach($htmlreclamos->find(".tc-item ul li") as $titulo) {
        $listaqueja[] = $titulo->plaintext;
       }
      // print_r($listaqueja);
      print_r("<ul><li>".$listaqueja[21]."</li><li>".$listaqueja[22]."</li><li>".
      $listaqueja[23]."</li><li>".$listaqueja[24]."</li></ul>");
     
      $etiquetaA = array();
      foreach($htmlreclamos->find(".acordeon a") as $titulo) {
        $etiquetaA[] = $titulo->plaintext;
       }
      // print_r($etiquetaA);

      $etiquetaAContenido = array();
      foreach($htmlreclamos->find(".acordeon .aco-contenido") as $titulo) {
        $etiquetaAContenido[] = $titulo->plaintext;
       }
      // print_r($etiquetaAContenido);

      $etiquetaAContenidoLista = array();
      foreach($htmlreclamos->find(".acordeon .aco-contenido ul li") as $titulo) {
        $etiquetaAContenidoLista[] = $titulo->plaintext;
       }
      // print_r($etiquetaAContenidoLista);

      print_r("<p><b>".$etiquetaA[0]."</b></p>");
      print_r("<p>".$etiquetaAContenido[0]."</p>");
      print_r("<p><b>".$etiquetaA[2]."</b></p>");
      print_r("<p>".$etiquetaAContenido[1]."</p>");
      print_r("<p><b>".$etiquetaA[3]."</b></p>");
      print_r("<ul><li>".$etiquetaAContenidoLista[0]."</li><li>".$etiquetaAContenidoLista[1]."</li><li>".
      $etiquetaAContenidoLista[2]."</li><li>".$etiquetaAContenidoLista[3]."</li><li>".$etiquetaAContenidoLista[4].
      "</li><li>".$etiquetaAContenidoLista[5]."</li></ul>");
  ?>
</section>
</div>
@endsection