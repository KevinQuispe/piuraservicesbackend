@extends('layouts.master')
@section('title','Nueva')
@section('content')
<div class="container">
<section>
<h3><center>WEB SCRAPING INFORMACIÓN DE TRÁMITES-ENOSA <center></h3>
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
          <div id="printableArea">
      <h3>Información de Trámites ENOSA<a href="https://www.distriluz.com.pe/enosa/index.php/servicios-enosa/" target="_blank">-Ver Sitio web</a></h3>
      <hr>
<?php

  include_once('../app/phpdom/simple_html_dom.php');                   
  // Create DOM from URL or file
  //$html = file_get_html('https://www.distriluz.com.pe/enosa/index.php/servicios');  
  $html = file_get_html('https://www.distriluz.com.pe/enosa/index.php/servicios-enosa');

  //titulo header 1
  print_r("<b>Requisitos para obtener un nuevo suministro</b><br>");
  $titulos = array();
  foreach($html->find('.row p') as $titulo) {
    $titulos[] = $titulo->plaintext;
   }
   //titulo 1
  print_r("<p style='color:blue'>".$titulos[0]."</p>");
  $listasLi = array();
  foreach($html->find('.blog .items-leading .row ul li') as $lista) {
    $listasLi[] = $lista->plaintext;
   }
   print_r("<ul><li>".$listasLi[0]."</li><li>".$listasLi[1]."</li><li>".$listasLi[2]."</li></ul>");
  //titulo 2
  print_r("<p style='color:blue'>".$titulos[1]."</p>");
  print_r("<ul><li>".$listasLi[3]."</li><li>".$listasLi[4]."</li><li>".$listasLi[5]."</li><li>".$listasLi[6]."</li><li>".$listasLi[7]."</li></ul>");
  //titulo 3
  print_r("<p style='color:blue'>".$titulos[2]."</p>");
  print_r("<ul><li>".$listasLi[8]."</li><li>".$listasLi[9]."</li><li>".$listasLi[10]."</li></ul>");
 
  //header 3
   print_r("<b>Requisitos para incremento de potencia</b><br>");
   print_r("<ul><li>".$listasLi[11]."</li><li>".$listasLi[12]."</li><li>".$listasLi[13]."</li></ul>");
   
  print_r("mi lista li<br>");
  print_r($listasLi);
  ?>
</section>
</div>


<!-- fin del div para imprimir -->
@endsection