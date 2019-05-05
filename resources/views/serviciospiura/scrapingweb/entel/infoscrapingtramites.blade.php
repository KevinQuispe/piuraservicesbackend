@extends('layouts.master')
@section('title','Nueva')
@section('content')
<div class="container">
<section>
<h3><center>WEB SCRAPING INFORMACIÓN TRAMITES-ENTEL <center></h3>
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
      <h3>Información de Trámites ENTEL</h3>
      <hr>
<?php
  include_once('../app/phpdom/simple_html_dom.php');                   
  // Create DOM from URL or file
  $entel= file_get_html('http://www.entel.pe/personas/ayuda-y-soporte/reclamos-y-solicitudes/' ) -> plaintext ;
  echo $entel;           
  ?>
</section>
</div>
@endsection