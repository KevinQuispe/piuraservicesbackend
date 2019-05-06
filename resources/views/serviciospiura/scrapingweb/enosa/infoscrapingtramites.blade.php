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
    
   //titulo 4
  print_r("<p style='color:blue'>".$titulos[3]."</p>");
  print_r("<ul><li>".$listasLi[14]."</li><li>".$listasLi[15]."</li><li>".$listasLi[16]."</li></ul>");
  
  //titulo 5
  print_r("<p style='color:blue'>".$titulos[4]."</p>");
  print_r("<ul><li>".$listasLi[17]."</li><li>".$listasLi[18]."</li><li>".$listasLi[19]."</li></ul>");
  
   //titulo 6
  print_r("<p style='color:blue'>".$titulos[5]."</p>");
  print_r("<ul><li>".$listasLi[20]."</li><li>".$listasLi[21]."</li><li>".$listasLi[22]."</li></ul>");
  //titulo 7
  print_r("<p style='color:blue'>".$titulos[6]."</p>");
  print_r("<ul><li>".$listasLi[23]."</li><li>".$listasLi[24]."</li><li>".$listasLi[25]."</li></ul>");
  
  //titulo 8
  print_r("<p style='color:blue'>".$titulos[7]."</p>");
  print_r("<ul><li>".$listasLi[26]."</li><li>".$listasLi[27]."</li><li>".$listasLi[28]."</li></ul>");
  
  //titulo 9
  print_r("<p style='color:blue'>".$titulos[8]."</p>");
  print_r("<ul><li>".$listasLi[29]."</li><li>".$listasLi[30]."</li><li>".$listasLi[31]."</li></ul>");
  
  //header 4
  print_r("<b>Requisitos para cambio de opción tarifaria</b><br>");
  
  print_r("<p style='color:blue'>".$titulos[9]."</p>");
  print_r("<ul><li>".$listasLi[32]."</li><li>".$listasLi[33]."</li><li>".$listasLi[34]."</li></ul>");
  //titulo 10
  print_r("<p style='color:blue'>".$titulos[10]."</p>");
  print_r("<ul><li>".$listasLi[35]."</li><li>".$listasLi[36]."</li><li>".$listasLi[37]."</li></ul>");
  
  //titulo 11
  print_r("<p style='color:blue'>".$titulos[11]."</p>");
  print_r("<ul><li>".$listasLi[38]."</li><li>".$listasLi[39]."</li><li>".$listasLi[40]."</li></ul>");
  //titulo 12
  print_r("<p style='color:blue'>".$titulos[12]."</p>");
  print_r("<ul><li>".$listasLi[41]."</li><li>".$listasLi[42]."</li><li>".$listasLi[43]."</li></ul>");
   //titulo 13
  print_r("<p style='color:blue'>".$titulos[11]."</p>");
  print_r("<ul><li>".$listasLi[44]."</li><li>".$listasLi[45]."</li><li>".$listasLi[46]."</li></ul>");
   //header 5
  print_r("<b>Requisitos para cambio de titular del suministro</b><br>");
  //titulo 14
  print_r("<p style='color:blue'>".$titulos[13]."</p>");
  print_r("<ul><li>".$listasLi[47]."</li><li>".$listasLi[48]."</li><li>".$listasLi[49]."</li><li>".$listasLi[50]."</li><li>".$listasLi[51]."</li></ul>");
  
   //header 5
   print_r("<b>Requisitos para presentar reclamo</b><br>");
   //titulo 14
   print_r("<p style='color:blue'>".$titulos[12]."</p>");
   print_r("<ul><li>".$listasLi[51]."</li><li>".$listasLi[52]."</li><li>".$listasLi[53]."</li></ul>");
   
   //titulo 14
   print_r("<p style='color:blue'>".$titulos[14]."</p>");
   print_r("<ul><li>".$listasLi[54]."</li><li>".$listasLi[55]."</li><li>".$listasLi[56]."</li></ul>");
   
   //titulo 15
   print_r("<p style='color:blue'>".$titulos[15]."</p>");
   print_r("<ul><li>".$listasLi[57]."</li><li>".$listasLi[58]."</li><li>".$listasLi[59]."<li>".$listasLi[60]."</li><li>".$listasLi[61]."</li>".$listasLi[62]."</li><li>".$listasLi[63]."</li></ul>");
   print_r("<p>".$titulos[17]."</p>");
  //titulo 16
  print_r("<b>Facilidades de pago</b><br>");
  print_r("<p style='color:blue'>".$titulos[18]."</p>");
  print_r("<ul><li>".$listasLi[64]."</li><li>".$listasLi[65]."</li><li>".$listasLi[66]."</li><li>".$listasLi[67]."</li></ul>");

  //titulo 17
  $listaspago = array();
  foreach($html->find('.blog .items-leading .row') as $lista) {
    $listaspago[] = $lista->plaintext;
   }
  print_r("<b>Pago automático en cuenta</b><br>");
  print_r("<p style='color:blue'>".$titulos[19]."</p>");
  print_r("<ul><li>".$listaspago[8]."</li><br><li>".$listaspago[9]."</li></ul>");
  
  //print_r("mi lista li<br>");
  //print_r($listaspago);
  ?>
</section>
</div>


<!-- fin del div para imprimir -->
@endsection