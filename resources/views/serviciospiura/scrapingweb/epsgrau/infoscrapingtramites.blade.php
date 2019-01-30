@extends('layouts.master')
@section('title','Nueva')
@section('content')
<div class="container">
<section>
<h3><center>WEB SCRAPING INFORMACIÓN DE TRÁMITES-EPS GRAU S.A<center></h3>
<hr>
<?php
  include_once('../app/phpdom/simple_html_dom.php');                   
  // Create DOM from URL or file
  $epsgrau = file_get_html('https://epsgrau.pe/webpage/desktop/views/procedimiento-atencion.html?im=8?ip=8?id=57?im=101');
  $titulosTabs = array();
  $titulosPanel1 = array();
  //foreach($epsgrau->find('a') as $info) {
  // $titulosPanel1[] = $info->plaintext;
  //}
  echo $epsgrau;     
  ?>
</section>
</div>
@endsection