@extends('layouts.master')
@section('title','Nueva')
@section('content')
<div class="container">
<section>
<h3><center>WEB SCRAPING CON TRÁMITES-EPS ENOSA <center></h3>
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

  // print_r('Titulos de los tabs');
  $titulosTabs = array();
  foreach($html->find('div[id$="pTabs"] ul li a') as $titulo) {
    $titulosTabs[] = $titulo->plaintext;
   }
  // print_r('Titulo de tabs');
  // print_r('<br/>');
  // print_r($titulosTabs);  
  // print_r('<br/>');
  // print_r('<br/>');

  // panel 1: Sobre el suministro
  $titulosPanel1 = array();
  foreach($html->find('div[id$="panel1"] h3') as $imfo) {
   $titulosPanel1[] = $imfo->plaintext;
  }
  // print_r('Titulo de panel 1');
  // print_r('<br/>');
  // print_r($titulosPanel1);
  // print_r('<br/>');
  // print_r('<br/>');

  // subtitulos del panel 1:
  $subtitulosPanel1 = array();
  foreach($html->find('div[id$="panel1"] p strong') as $imfo) {
   $subtitulosPanel1[] = $imfo->plaintext;
  }
  // print_r('Sub Titulo de panel 1');
  // print_r('<br/>');
  // print_r($subtitulosPanel1);
  // print_r('<br/>');
  // print_r('<br/>');

  // ordered list li
  $olPanel1 = array();
  foreach($html->find('div[id$="panel1"] ol li') as $imfo) {
   $olPanel1[] = $imfo->plaintext;
  }
  // print_r('OL li panel 1');
  // print_r('<br/>');
  // print_r($olPanel1);
  // print_r('<br/>');
  // print_r('<br/>');

  // todos los p
  $pes = array();
  foreach($html->find('div[id$="panel1"] p') as $imfo) {
   $pes[] = $imfo->plaintext;
  }
  // print_r('etiqueta p');
  // print_r('<br/>');
  // print_r($pes);
  // print_r('<br/>');
  // print_r('<br/>');

  // print_r($infos[0]."<br/>".$infos[1]."<br/>".$infos[2]);
  
  /**TAB N 1 */
  print_r("<h2 style='color: blue'>".$titulosTabs[0]."</h2><br/>");//titulosPanel1
  print_r("<h3>".$titulosPanel1[1]."</h3>");
  print_r("<h4>".$subtitulosPanel1[0]."</h4>");
  print_r("<p>".$pes[1]."</p>");
  print_r("<p>".$pes[2]."</p>");
  $etiquetaLista = "<ol><li>".$olPanel1[0]."</li><li>".
    $olPanel1[1]."</li><li>".$olPanel1[2]."</li><li>".$olPanel1[3]."</li></ol>";
  print_r($etiquetaLista);
  print_r("<p>".$pes[3]."</p>");
  $etiquetaLista = "<ol><li>".$olPanel1[4]."</li><li>".
    $olPanel1[5]."</li></ol>";
  print_r($etiquetaLista);
  print_r("<h3>".$titulosPanel1[3]."</h3>");
  print_r("<h4>".$subtitulosPanel1[1]."</h4>");
  print_r("<p>".$pes[5]."</p>");
  $etiquetaLista = "<ol><li>".$olPanel1[6]."</li><li>".
    $olPanel1[7]."</li><li>".$olPanel1[8]."</li><li>".$olPanel1[9]."</li></ol>";
  print_r($etiquetaLista);
  print_r("<h3>".$titulosPanel1[5]."</h3>");
  print_r("<h4>".$subtitulosPanel1[2]."</h4>");
  $etiquetaLista = "<ol><li>".$olPanel1[10]."</li><li>".
    $olPanel1[11]."</li><li>".$olPanel1[12]."</li><li>".$olPanel1[13]."</li></ol>";
  print_r($etiquetaLista);
  print_r("<h3>".$titulosPanel1[7]."</h3>");
  print_r("<h4>".$subtitulosPanel1[3]."</h4>");
  $etiquetaLista = "<ol><li>".$olPanel1[14]."</li><li>".
    $olPanel1[15]."</li><li>".$olPanel1[16]."</li><li>".$olPanel1[17]."</li></ol>";
  print_r($etiquetaLista);
  print_r("<p>".$pes[8]."</p>");
  print_r("<h3>".$titulosPanel1[9]."</h3>");
  print_r("<h4>".$subtitulosPanel1[4]."</h4>");
  print_r("<p>".$pes[10]."</p>");
  $etiquetaLista = "<ol><li>".$olPanel1[18]."</li><li>".
    $olPanel1[19]."</li></ol>";
  print_r($etiquetaLista);
  print_r("");

  /** */
  // print_r('Titulos de los tabs');
  $titulosTabs = array();
  foreach($html->find('div[id$="pTabs"] ul li a') as $titulo) {
    $titulosTabs[] = $titulo->plaintext;
   }
  // print_r('Titulo de tabs');
  // print_r('<br/>');
  // print_r($titulosTabs);  
  // print_r('<br/>');
  // print_r('<br/>');

  // panel 1: Sobre el suministro
  $titulosPanel1 = array();
  foreach($html->find('div[id$="panel2"] h3') as $imfo) {
   $titulosPanel1[] = $imfo->plaintext;
  }
  // print_r('Titulo de panel 1');
  // print_r('<br/>');
  // print_r($titulosPanel1);
  // print_r('<br/>');
  // print_r('<br/>');

  // subtitulos del panel 1:
  $subtitulosPanel1 = array();
  foreach($html->find('div[id$="panel2"] p strong') as $imfo) {
   $subtitulosPanel1[] = $imfo->plaintext;
  }
  // print_r('Sub Titulo de panel 1');
  // print_r('<br/>');
  // print_r($subtitulosPanel1);
  // print_r('<br/>');
  // print_r('<br/>');

  // ordered list li
  $olPanel1 = array();
  foreach($html->find('div[id$="panel2"] ol li') as $imfo) {
   $olPanel1[] = $imfo->plaintext;
  }
  // print_r('OL li panel 1');
  // print_r('<br/>');
  // print_r($olPanel1);
  // print_r('<br/>');
  // print_r('<br/>');

  // todos los p
  $pes = array();
  foreach($html->find('div[id$="panel2"] p') as $imfo) {
   $pes[] = $imfo->plaintext;
  }
  // print_r('etiqueta p');
  // print_r('<br/>');
  // print_r($pes);
  // print_r('<br/>');
  // print_r('<br/>');

  /** TAG N 2*/
  print_r("<h2 style='color: blue'>".$titulosTabs[1]."</h2><br/>");//titulosPanel1
  print_r("<h4>".$subtitulosPanel1[0]."</h4>");
  print_r("<p>".$pes[2]."</p>");
  $etiquetaLista = "<ol><li>".$olPanel1[0]."</li><li>".
    $olPanel1[1]."</li><li>".$olPanel1[2]."</li></ol>";
  print_r($etiquetaLista);
  /** */

  // print_r('Titulos de los tabs');
  $titulosTabs = array();
  foreach($html->find('div[id$="pTabs"] ul li a') as $titulo) {
    $titulosTabs[] = $titulo->plaintext;
   }
  // print_r('Titulo de tabs');
  // print_r('<br/>');
  // print_r($titulosTabs);
  // print_r('<br/>');
  // print_r('<br/>');

  // panel 1: Sobre el suministro
  $titulosPanel1 = array();
  foreach($html->find('div[id$="panel3"] h3') as $imfo) {
   $titulosPanel1[] = $imfo->plaintext;
  }
  // print_r('Titulo de panel 1');
  // print_r('<br/>');
  // print_r($titulosPanel1);
  // print_r('<br/>');
  // print_r('<br/>');

  // subtitulos del panel 1:
  $subtitulosPanel1 = array();
  foreach($html->find('div[id$="panel3"] p strong') as $imfo) {
   $subtitulosPanel1[] = $imfo->plaintext;
  }
  // print_r('Sub Titulo de panel 1');
  // print_r('<br/>');
  // print_r($subtitulosPanel1);
  // print_r('<br/>');
  // print_r('<br/>');
  // uordered list li
  $ulPanel1 = array();
  foreach($html->find('div[id$="panel3"] ul li') as $imfo) {
   $ulPanel1[] = $imfo->plaintext;
  }
  // print_r('UL li panel 1');
  // print_r('<br/>');
  // print_r($ulPanel1);
  // print_r('<br/>');
  // print_r('<br/>');
  // ordered list li
  $olPanel1 = array();
  foreach($html->find('div[id$="panel3"] ol li') as $imfo) {
   $olPanel1[] = $imfo->plaintext;
  }
  // print_r('OL li panel 1');
  // print_r('<br/>');
  // print_r($olPanel1);
  // print_r('<br/>');
  // print_r('<br/>');

  // todos los p
  $pes = array();
  foreach($html->find('div[id$="panel3"] p') as $imfo) {
   $pes[] = $imfo->plaintext;
  }
  // print_r('etiqueta p');
  // print_r('<br/>');
  // print_r($pes);
  // print_r('<br/>');
  // print_r('<br/>');

  /**TAB N 3 */
  print_r("<h2 style='color: blue'>".$titulosTabs[2]."</h2><br/>");//titulosPanel1
  print_r("<h3>".$titulosPanel1[1]."</h3>");
  // print_r("<h4>".$subtitulosPanel1[0]."</h4>");
  print_r("<p>".$pes[0]."</p>");
  print_r("<p>".$pes[1]."</p>");
  // $etiquetaLista = "<ol><li>".$olPanel1[0]."</li><li>".
  //   $olPanel1[1]."</li><li>".$olPanel1[2]."</li><li>".$olPanel1[3]."</li></ol>";
  // print_r($etiquetaLista);
  // print_r("<p>".$pes[3]."</p>");
  print_r("<h3>".$titulosPanel1[3]."</h3>");
  print_r("<p>".$pes[2]."</p>");
  print_r("<p>".$pes[3]."</p>");
  print_r("<p>".$pes[4]."</p>");
  print_r("<p>".$pes[5]."</p>");
  print_r("<p>".$pes[6]."</p>");
  print_r("<p>".$pes[7]."</p>");
  print_r("<p>".$pes[8]."</p>");
  print_r("<h3>".$titulosPanel1[5]."</h3>");
  print_r("<p>".$pes[9]."</p>");
  $etiquetaLista = "<ul><li>".$ulPanel1[0]."</li><li>".
    $ulPanel1[1]."</li><li>".$ulPanel1[2]."</li><li>".$ulPanel1[3].
    "</li><li>".$ulPanel1[4]."</li><li>".$ulPanel1[5]."</li><li>".$ulPanel1[6]."</li></ul>";
  print_r($etiquetaLista);
  print_r("<p>".$pes[10]."</p>");
  $etiquetaLista = "<ul><li>".$ulPanel1[7]."</li><li>".
    $ulPanel1[8]."</li><li>".$ulPanel1[9]."</li><li>".$ulPanel1[10].
    "</li><li>".$ulPanel1[11]."</li><li>".$ulPanel1[12]."</li><li>".$ulPanel1[13]."</li></ul>";
  print_r($etiquetaLista);
  print_r("<h3>".$titulosPanel1[7]."</h3>");
  print_r("<p>".$pes[11]."</p>");
  print_r("<h4>".$subtitulosPanel1[4]."</h4>");
  $etiquetaLista = "<ol><li>".$olPanel1[0]."</li><li>".
    $olPanel1[1]."</li><li>".$olPanel1[2]."</li><li>".$olPanel1[3].
    "</li><li>".$olPanel1[4]."</li><li>".$olPanel1[5]."</li></ol>";
  print_r($etiquetaLista);
  print_r("<h3>".$titulosPanel1[9]."</h3>");
  print_r("<p>".$pes[13]."</p>");
  print_r("<h4>".$subtitulosPanel1[5]."</h4>");
  $etiquetaLista = "<ol><li>".$olPanel1[6]."</li><li>".
    $olPanel1[7]."</li></ol>";
  print_r($etiquetaLista);
  print_r("<p>".$pes[15]."</p>");
  print_r("<p>".$pes[16]."</p>");
  print_r("<h3>".$titulosPanel1[11]."</h3>");
  print_r("<p>".$pes[17]."</p>");
  print_r("<h4>".$subtitulosPanel1[6]."</h4>");
  print_r("<p>".$pes[19]."</p>");
  print_r("<h4>".$subtitulosPanel1[7]."</h4>");
  print_r("<p>".$pes[20]."</p>");
  print_r("<p>".$pes[21]."</p>");
  print_r("<h3>".$titulosPanel1[13]."</h3>");
  print_r("<p>".$pes[22]."</p>");
  print_r("<p>".$pes[23]."</p>");
  print_r("<p>".$pes[24]."</p>");
  print_r("<h3>".$titulosPanel1[15]."</h3>");
  print_r("<p>".$pes[25]."</p>");
  print_r("<h3>".$titulosPanel1[17]."</h3>");
  print_r("<p>".$pes[26]."</p>");
  $etiquetaLista = "<ul><li>".$ulPanel1[14]."</li><li>".
    $ulPanel1[15]."</li><li>".$ulPanel1[16]."</li></ul>";
  print_r($etiquetaLista);
  print_r("<h3>".$titulosPanel1[19]."</h3>");
  print_r("<h4>".$subtitulosPanel1[11]."</h4>");
  print_r("<p>".$pes[28]."</p>");
  $etiquetaLista = "<ol><li>".$olPanel1[8]."</li><li>".
    $olPanel1[9]."</li></ol>";
  print_r($etiquetaLista);
  print_r("<p>".$pes[29]."</p>");
  $etiquetaLista = "<ol><li>".$olPanel1[10]."</li></ol>";
  print_r($etiquetaLista);

  /** TAG N 4 */
  // print_r('Titulos de los tabs');
  $titulosTabs = array();
  foreach($html->find('div[id$="pTabs"] ul li a') as $titulo) {
    $titulosTabs[] = $titulo->plaintext;
   }
  // print_r('Titulo de tabs');
  // print_r('<br/>');
  // print_r($titulosTabs);
  // print_r('<br/>');
  // print_r('<br/>');

  // panel 1: Sobre el suministro
  $titulosPanel1 = array();
  foreach($html->find('div[id$="panel4"] h3') as $imfo) {
   $titulosPanel1[] = $imfo->plaintext;
  }
  // print_r('Titulo de panel 1');
  // print_r('<br/>');
  // print_r($titulosPanel1);
  // print_r('<br/>');
  // print_r('<br/>');

  // subtitulos del panel 1:
  $subtitulosPanel1 = array();
  foreach($html->find('div[id$="panel4"] p strong') as $imfo) {
   $subtitulosPanel1[] = $imfo->plaintext;
  }
  // print_r('Sub Titulo de panel 1');
  // print_r('<br/>');
  // print_r($subtitulosPanel1);
  // print_r('<br/>');
  // print_r('<br/>');
  // uordered list li
  $ulPanel1 = array();
  foreach($html->find('div[id$="panel4"] ul li') as $imfo) {
   $ulPanel1[] = $imfo->plaintext;
  }
  // print_r('UL li panel 1');
  // print_r('<br/>');
  // print_r($ulPanel1);
  // print_r('<br/>');
  // print_r('<br/>');
  // ordered list li
  $olPanel1 = array();
  foreach($html->find('div[id$="panel4"] ol li') as $imfo) {
   $olPanel1[] = $imfo->plaintext;
  }
  // print_r('OL li panel 1');
  // print_r('<br/>');
  // print_r($olPanel1);
  // print_r('<br/>');
  // print_r('<br/>');

  // todos los p
  $pes = array();
  foreach($html->find('div[id$="panel4"] p') as $imfo) {
   $pes[] = $imfo->plaintext;
  }
  // print_r('etiqueta p');
  // print_r('<br/>');
  // print_r($pes);
  // print_r('<br/>');
  // print_r('<br/>');
  //
  print_r("<h2 style='color: blue'>".$titulosTabs[3]."</h2><br/>");//titulosPanel1
  print_r("<h3>".$titulosPanel1[1]."</h3>");
  $etiquetaLista = "<ul><li>".$ulPanel1[0]."</li><li>".
    $ulPanel1[1]."</li><li>".$ulPanel1[2]."</li><li>".$ulPanel1[3].
    "</li><li>".$ulPanel1[4]."</li></ul>";
  print_r($etiquetaLista);
  print_r("<h3>".$titulosPanel1[3]."</h3>");
  $etiquetaLista = "<ul><li>".$ulPanel1[5]."</li><li>".
    $ulPanel1[6]."</li><li>".$ulPanel1[7]."</li><li>".$ulPanel1[8]."</li></ul>";
  print_r($etiquetaLista);

  /**TAG N 5 */
  // print_r('Titulos de los tabs');
  $titulosTabs = array();
  foreach($html->find('div[id$="pTabs"] ul li a') as $titulo) {
    $titulosTabs[] = $titulo->plaintext;
   }
  // print_r('Titulo de tabs');
  // print_r('<br/>');
  // print_r($titulosTabs);
  // print_r('<br/>');
  // print_r('<br/>');

  // panel 1: Sobre el suministro
  $titulosPanel1 = array();
  foreach($html->find('div[id$="panel5"] h3') as $imfo) {
   $titulosPanel1[] = $imfo->plaintext;
  }
  // print_r('Titulo de panel 1');
  // print_r('<br/>');
  // print_r($titulosPanel1);
  // print_r('<br/>');
  // print_r('<br/>');

  // subtitulos del panel 1:
  $subtitulosPanel1 = array();
  foreach($html->find('div[id$="panel5"] p strong') as $imfo) {
   $subtitulosPanel1[] = $imfo->plaintext;
  }
  // print_r('Sub Titulo de panel 1');
  // print_r('<br/>');
  // print_r($subtitulosPanel1);
  // print_r('<br/>');
  // print_r('<br/>');
  // uordered list li
  $ulPanel1 = array();
  foreach($html->find('div[id$="panel5"] ul li') as $imfo) {
   $ulPanel1[] = $imfo->plaintext;
  }
  // print_r('UL li panel 1');
  // print_r('<br/>');
  // print_r($ulPanel1);
  // print_r('<br/>');
  // print_r('<br/>');
  // ordered list li
  $olPanel1 = array();
  foreach($html->find('div[id$="panel5"] ol li') as $imfo) {
   $olPanel1[] = $imfo->plaintext;
  }
  // print_r('OL li panel 1');
  // print_r('<br/>');
  // print_r($olPanel1);
  // print_r('<br/>');
  // print_r('<br/>');

  // todos los p
  $pes = array();
  foreach($html->find('div[id$="panel5"] p') as $imfo) {
   $pes[] = $imfo->plaintext;
  }
  // print_r('etiqueta p');
  // print_r('<br/>');
  // print_r($pes);
  // print_r('<br/>');
  // print_r('<br/>');
  //
  print_r("<h2 style='color: blue'>".$titulosTabs[4]."</h2><br/>");//titulosPanel1
  print_r("<h3>".$titulosPanel1[1]."</h3>");
  // print_r("<h4>".$subtitulosPanel1[0]."</h4>");
  print_r("<p>".$pes[0]."</p>");
  print_r("<p>".$pes[1]."</p>");
  $etiquetaLista = "<ol><li>".$olPanel1[0]."</li><li>".
    $olPanel1[1]."</li><li>".$olPanel1[2]."</li><li>".$olPanel1[3]."</li><li>".
    $olPanel1[4]."</li><li>".$olPanel1[5]."</li><li>".$olPanel1[6]."</li><li>".
    $olPanel1[7]."</li><li>".$olPanel1[8]."</li><li>".$olPanel1[9]."</li><li>".
    $olPanel1[10]."</li><li>".$olPanel1[11]."</li></ol>";
  print_r($etiquetaLista);
  // print_r("<p>".$pes[3]."</p>");

  /**TAB N 6 */
  // print_r('Titulos de los tabs');
  $titulosTabs = array();
  foreach($html->find('div[id$="pTabs"] ul li a') as $titulo) {
    $titulosTabs[] = $titulo->plaintext;
   }
  // print_r('Titulo de tabs');
  // print_r('<br/>');
  // print_r($titulosTabs);
  // print_r('<br/>');
  // print_r('<br/>');

  // panel 1: Sobre el suministro
  $titulosPanel1 = array();
  foreach($html->find('div[id$="panel6"] h3') as $imfo) {
   $titulosPanel1[] = $imfo->plaintext;
  }
  // print_r('Titulo de panel 1');
  // print_r('<br/>');
  // print_r($titulosPanel1);
  // print_r('<br/>');
  // print_r('<br/>');

  // subtitulos del panel 1:
  $subtitulosPanel1 = array();
  foreach($html->find('div[id$="panel6"] p strong') as $imfo) {
   $subtitulosPanel1[] = $imfo->plaintext;
  }
  // print_r('Sub Titulo de panel 1');
  // print_r('<br/>');
  // print_r($subtitulosPanel1);
  // print_r('<br/>');
  // print_r('<br/>');
  // uordered list li
  $ulPanel1 = array();
  foreach($html->find('div[id$="panel6"] ul li') as $imfo) {
   $ulPanel1[] = $imfo->plaintext;
  }
  // print_r('UL li panel 1');
  // print_r('<br/>');
  // print_r($ulPanel1);
  // print_r('<br/>');
  // print_r('<br/>');
  // ordered list li
  $olPanel1 = array();
  foreach($html->find('div[id$="panel6"] ol li') as $imfo) {
   $olPanel1[] = $imfo->plaintext;
  }
  // print_r('OL li panel 1');
  // print_r('<br/>');
  // print_r($olPanel1);
  // print_r('<br/>');
  // print_r('<br/>');

  // todos los p
  $pes = array();
  foreach($html->find('div[id$="panel6"] p') as $imfo) {
   $pes[] = $imfo->plaintext;
  }
  // print_r('etiqueta p');
  // print_r('<br/>');
  // print_r($pes);
  // print_r('<br/>');
  // print_r('<br/>');
  //
  print_r("<h2 style='color: blue'>".$titulosTabs[5]."</h2><br/>");//titulosPanel1
  print_r("<h3>".$titulosPanel1[1]."</h3>");
  // print_r("<h4>".$subtitulosPanel1[0]."</h4>");
  print_r("<p>".$pes[0]."</p>");
  print_r("<p>".$pes[1]."</p>");
  $etiquetaLista = "<ul><li>".$ulPanel1[0]."</li><li>".
    $ulPanel1[1]."</li><li>".$ulPanel1[2]."</li><li>".$ulPanel1[3]."</li><li>".
    $ulPanel1[4]."</li><li>".$ulPanel1[5]."</li><li>".$ulPanel1[6]."</li><li>".
    $ulPanel1[7]."</li><li>".$ulPanel1[8]."</li><li>".$ulPanel1[9]."</li><li>".
    $ulPanel1[10]."</li><li>".$ulPanel1[11]."</li></ul>";
  print_r($etiquetaLista);
  /**TAG N 7 */
  $titulosPanel1 = array();
  foreach($html->find('div[id$="panel7"] h3') as $imfo) {
   $titulosPanel1[] = $imfo->plaintext;
  }
  // print_r('Titulo de panel 1');
  // print_r('<br/>');
  // print_r($titulosPanel1);
  // print_r('<br/>');
  // print_r('<br/>');

  // subtitulos del panel 1:
  $subtitulosPanel1 = array();
  foreach($html->find('div[id$="panel7"] p strong') as $imfo) {
   $subtitulosPanel1[] = $imfo->plaintext;
  }
  // print_r('Sub Titulo de panel 1');
  // print_r('<br/>');
  // print_r($subtitulosPanel1);
  // print_r('<br/>');
  // print_r('<br/>');
  // uordered list li
  $ulPanel1 = array();
  foreach($html->find('div[id$="panel7"] ul li') as $imfo) {
   $ulPanel1[] = $imfo->plaintext;
  }
  // print_r('UL li panel 1');
  // print_r('<br/>');
  // print_r($ulPanel1);
  // print_r('<br/>');
  // print_r('<br/>');
  // ordered list li
  $olPanel1 = array();
  foreach($html->find('div[id$="panel7"] ol li') as $imfo) {
   $olPanel1[] = $imfo->plaintext;
  }
  // print_r('OL li panel 1');
  // print_r('<br/>');
  // print_r($olPanel1);
  // print_r('<br/>');
  // print_r('<br/>');

  // todos los p
  $pes = array();
  foreach($html->find('div[id$="panel7"] p') as $imfo) {
   $pes[] = $imfo->plaintext;
  }
  // print_r('etiqueta p');
  // print_r('<br/>');
  // print_r($pes);
  // print_r('<br/>');
  // print_r('<br/>');
  //
  print_r("<h2 style='color: blue'>".$titulosTabs[4]."</h2><br/>");//titulosPanel1
  print_r("<h3>".$titulosPanel1[2]."</h3>");
  print_r("<h4>".$subtitulosPanel1[0]."</h4>");
  print_r("<p>".$pes[3]."</p>");
  print_r("<p>".$pes[4]."</p>");
  print_r("<p>".$pes[5]."</p>");
  print_r("<p>".$pes[6]."</p>");
  $etiquetaLista = "<ol><li>".$olPanel1[0]."</li><li>".
    $olPanel1[1]."</li><li>".$olPanel1[2]."</li><li>".$olPanel1[3]."</li><li>".
    $olPanel1[4]."</li><li>".$olPanel1[5]."</li><li>".$olPanel1[6]."</li><li>".
    $olPanel1[7]."</li><li>".$olPanel1[8]."</li><li>".$olPanel1[9]."</li><li>".
    $olPanel1[10]."</li><li>".$olPanel1[11]."</li><li>".$olPanel1[12]."</li></ol>";
  print_r($etiquetaLista);
  ?>
</section>
</div>
@endsection