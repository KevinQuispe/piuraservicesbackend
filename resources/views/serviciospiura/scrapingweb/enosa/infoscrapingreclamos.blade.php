@extends('layouts.master')
@section('title','Nueva')
@section('content')
<div class="container">
<section>
<h3><center>WEB SCRAPING CON RECLAMOS-ENOSA<center></h3>
<?php
  include_once('../app/phpdom/simple_html_dom.php');                   
  // Create DOM from URL or file
  // $html = file_get_html('http://www.distriluz.com.pe/enosa//');
  // $infoenosa= file_get_html ( 'http://www.distriluz.com.pe/enosa/' ) -> plaintext ;
  // echo $infoenosa;   
  ?>
</section>
</div>
@endsection