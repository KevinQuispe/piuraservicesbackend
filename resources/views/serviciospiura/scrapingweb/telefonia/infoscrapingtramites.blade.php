@extends('layouts.master')
@section('title','Nueva')
@section('content')

<div class="container">
    <section>   
    <h3><center>WEB SCRAPING INFORMACIÓN DE TRAMITES-MOVISTAR <center></h3>
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
      <h3>Información de trámites MOVISTAR<a href="http://www.movistar.com.pe/atencion-al-cliente/tramites/renovacion-equipos-postpago" target="_blank">-Ver Sitio web</a></h3>
      <hr>
      <hr>
              <?php
                include_once('../app/phpdom/simple_html_dom.php');                   
                // Create DOM from URL or file
                //tramites
                $html = file_get_html('http://www.movistar.com.pe/');
               
                $htmltramites = file_get_html('http://www.movistar.com.pe/atencion-al-cliente/tramites/renovacion-equipos-postpago');
                $infomovistar= file_get_html ( 'http://www.movistar.com.pe/' ) -> plaintext ;
                // echo $htmltramites;   
                
                // print_r("<b>titulosTabs</b><br/>");
                $titulosTabs = array();
                foreach($htmltramites->find('div[class$="portlet-body"] ul li a') as $titulo) {
                  $titulosTabs[] = $titulo->plaintext;
                }

                // print_r("<b>titulos1h2</b><br/>");
                $titulos1h2 = array();
                foreach ($htmltramites->find('.contenido-no-estructurado h2') as $titulo) {
                  # code...
                  $titulos1h2[] = $titulo->plaintext;
                }
                // print_r($titulos1h2);
                // print_r("<br/>");
                
                // print_r("<b>lista</b><br/>");
                $lista = array();
                foreach ($htmltramites->find('.bullets li') as $titulo) {
                  # code...
                  $lista[] = $titulo->plaintext;
                }
                // print_r($lista);
                // print_r("<br/>");

                // print_r("<b>titulosh3</b><br/>");
                $titulosh3 = array();
                foreach ($htmltramites->find('.contenido-no-estructurado h3') as $titulo) {
                  # code...
                  $titulosh3[] = $titulo->plaintext;
                }
                // print_r($titulosh3);
                // print_r("<br/>");

                // print_r("<b>titulostexto</b><br/>");
                $titulostexto = array();
                foreach ($htmltramites->find('.contenido-no-estructurado .text') as $titulo) {
                  # code...
                  $titulostexto[] = $titulo->plaintext;
                }
                // print_r($titulostexto);
                // print_r("<br/>");

                // print_r("<b>titulostexto3</b><br/>");
                $titulostexto3 = array();
                foreach ($htmltramites->find('.contenido-no-estructurado .button-information') as $titulo) {
                  # code...
                  $titulostexto3[] = $titulo->plaintext;
                }
                // print_r($titulostexto3);
                // print_r("<br/>");

                $titulostexto2 = array();
                foreach ($htmltramites->find('.text-promocion') as $titulo) {
                  # code...
                  $titulostexto2[] = $titulo->plaintext;
                }

                # ¿Cómo renovar?
                print_r("<h1 style='color: blue'>".$titulosTabs[0]."</h1>");
                print_r("<h3 style='color: blue'>".$titulos1h2[0]."</h3>");
                print_r("<p>".$titulostexto2[0]."</p>");
                print_r("<h3 style='color: blue'>".$titulos1h2[1]."</h3>");
                print_r("<ul><li>".$lista[0]."</li><li>".$lista[2]."</li></ul>");
                print_r("<h4 style='color: blue'>".$titulosh3[0]."</h4>");
                print_r("<ul><li>".$lista[2]."</li><li>".$lista[3]."</li><li>".$lista[4]."</li></ul>");
                
                # ¿Cómo recuperar?
                print_r("<h1 style='color: blue'>".$titulosTabs[1]."</h1>");
                print_r("<h3 style='color: blue'>".$titulos1h2[2]."</h3>");
                print_r("<h4 style='color: blue'>".$titulosh3[1]."</h4>");
                print_r("<p>".$titulostexto[0]."</p>");
                print_r("<p>".$titulostexto3[0]."</p>");
                print_r("<p>".$titulostexto3[2]."</p>");
                print_r("<p>".$titulostexto[2]."</p>");
                print_r("<h4 style='color: blue'>".$titulosh3[2]."</h4>");
                print_r("<p>".$titulostexto[3]."</p>");
                print_r("<h4 style='color: blue'>".$titulosh3[1]."</h4>");
                print_r("<p>".$titulostexto[5]."</p>");
                print_r("<p>".$titulostexto[6]."</p>");
                print_r("<p>".$titulostexto[8]."</p>");

                // print_r("<h1 style='color: blue'>".$titulosTabs[2]."</h1>");

                # Reconexión con permanencia
                print_r("<h1 style='color: blue'>".$titulosTabs[3]."</h1>");
                print_r("<h3 style='color: blue'>".$titulos1h2[5]."</h3>");
                print_r("<p>".$titulostexto[9]."</p>");
                print_r("<h4 style='color: blue'>".$titulosh3[4]."</h4>");
                print_r("<p>".$titulostexto[10]."</p>");
                print_r("<h4 style='color: blue'>".$titulosh3[5]."</h4>");
                print_r("<p>".$titulostexto[11]."</p>");
                ?>
           </section>
    
    </div>
       
@endsection