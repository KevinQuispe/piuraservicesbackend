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
      <h3>Información de Trámites ENOSA</h3>
      <hr>
<?php

  include_once('../app/phpdom/simple_html_dom.php');                   
  // Create DOM from URL or file
  //$html = file_get_html('https://www.distriluz.com.pe/enosa/index.php/servicios');  
  $html = file_get_html('https://www.distriluz.com.pe/enosa/index.php/servicios-enosa');

  //arreglo para los p
  $titulos = array();
  foreach($html->find('.row p') as $titulo) {
    $titulos[] = $titulo->plaintext;
   }
     print_r($titulos);
     print_r("<p><strong>".$titulos[0]."</strong></p>");
    
  $listasLi = array();
  foreach($html->find('.blog .items-leading .row ul li') as $lista) {
    $listasLi[] = $lista->plaintext;
   }
   print_r($listasLi);
  ?>
</section>
</div>


<!-- fin del div para imprimir -->
@endsection