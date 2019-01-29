@extends('layouts.master')
@section('title','Nueva')
@section('content')
<div class="container">
<section>
<h3><center>WEB SCRAPING CON TRAMITES-EPS ENOSA <center></h3>
<?php
  include_once('../app/phpdom/simple_html_dom.php');                   
  // Create DOM from URL or file
  $infotramites;
  // $html = file_get_html('http://www.distriluz.com.pe/enosa/index.php/servicios/');
  // $infoenosa= file_get_html ( 'http://www.distriluz.com.pe/enosa/index.php/servicios/' ) -> plaintext ;
  // echo $infoenosa;   
  $html = file_get_html('http://www.distriluz.com.pe/enosa/index.php/servicios/');
  // print_r($html);
  $titulosTabs = array();
  // foreach($html->find('div[id$="pTabs"]') as $titulo) {
  //   $titulosTabs[] = $titulo->plaintext;
  // }
  // print_r($titulosTabs);

  print_r('Titulos de los tabs');
  $titulosTabs = array();
  foreach($html->find('div[id$="pTabs"] ul li a') as $titulo) {
    $titulosTabs[] = $titulo->plaintext;
   }
  print_r('Titulo de tabs');
  print_r('<br/>');
  print_r($titulosTabs);  
  print_r('<br/>');
  print_r('<br/>');

  // panel 1: Sobre el suministro
  $titulosPanel1 = array();
  foreach($html->find('div[id$="panel1"] h3') as $imfo) {
   $titulosPanel1[] = $imfo->plaintext;
  }
  print_r('Titulo de panel 1');
  print_r('<br/>');
  print_r($titulosPanel1);
  print_r('<br/>');
  print_r('<br/>');

  // subtitulos del panel 1:
  $subtitulosPanel1 = array();
  foreach($html->find('div[id$="panel1"] p strong') as $imfo) {
   $subtitulosPanel1[] = $imfo->plaintext;
  }
  print_r('Sub Titulo de panel 1');
  print_r('<br/>');
  print_r($subtitulosPanel1);
  print_r('<br/>');
  print_r('<br/>');

  // ordered list li
  $olPanel1 = array();
  foreach($html->find('div[id$="panel1"] ol li') as $imfo) {
   $olPanel1[] = $imfo->plaintext;
  }
  print_r('OL li panel 1');
  print_r('<br/>');
  print_r($olPanel1);
  print_r('<br/>');
  print_r('<br/>');

  // todos los p
  $pes = array();
  foreach($html->find('div[id$="panel1"] p') as $imfo) {
   $pes[] = $imfo->plaintext;
  }
  print_r('etiqueta p');
  print_r('<br/>');
  print_r($pes);
  print_r('<br/>');
  print_r('<br/>');

  // print_r($infos[0]."<br/>".$infos[1]."<br/>".$infos[2]);
  
  print_r("<h2>".$titulosTabs[0]."</h2>");
  print_r("<h3>".$subtitulosPanel1[0]."</h3>");
  print_r("<p>".$pes[1]."</p>");
  print_r("<p>".$pes[2]."</p>");
  $etiquetaLista = "<ol><li>".$olPanel1[0]."</li><li>".
    $olPanel1[1]."</li><li>".$olPanel1[2]."</li><li>".$olPanel1[3]."</li></ol>";
  print_r($etiquetaLista);

  print_r("");
  ?>
</section>
</div>
@endsection