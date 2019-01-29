@extends('layouts.master')
@section('title','Nueva')
@section('content')
<div class="container">
<section>
<h3><center>WEB SCRAPING CON RECLAMOS-EPS GRAU S.A <center></h3>
<?php
  include_once('../app/phpdom/simple_html_dom.php');                   
  // Create DOM from URL or file
  $html = file_get_html('https://epsgrau.pe/webpage/desktop/views/procedimiento-atencion.html?im=8?ip=8?id=57?im=101');
  $infoeps= file_get_html ( 'https://epsgrau.pe/webpage/desktop/views/procedimiento-atencion.html?im=8?ip=8?id=57?im=101' ) -> plaintext ;
  echo $infoeps;           
  ?>
</section>
</div>
@endsection