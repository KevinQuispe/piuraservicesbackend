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
      <h3>Información de trámites MOVISTAR</h3>
      <hr>
              <?php
                include_once('../app/phpdom/simple_html_dom.php');                   
                // Create DOM from URL or file
                //tramites
                $html = file_get_html('http://www.movistar.com.pe/');
               
                $htmltramites = file_get_html('http://www.movistar.com.pe/atencion-al-cliente/tramites/renovacion-equipos-postpago');
                $infomovistar= file_get_html ( 'http://www.movistar.com.pe/' ) -> plaintext ;
                // echo $htmltramites;   
                
                $titulosTabs = array();
                foreach($htmltramites->find('div[class$="portlet-body"] ul li a') as $titulo) {
                  $titulosTabs[] = $titulo->plaintext;
                }
                
                print_r("<h2 style='color: blue'>".$titulosTabs[0]."</h2>");
                print_r("<h2 style='color: blue'>".$titulosTabs[1]."</h2>");
                print_r("<h2 style='color: blue'>".$titulosTabs[2]."</h2>");
                print_r("<h2 style='color: blue'>".$titulosTabs[3]."</h2>");
                ?>
           </section>
    
    </div>
       
@endsection