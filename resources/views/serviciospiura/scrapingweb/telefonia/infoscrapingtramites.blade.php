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
                $html = file_get_html('http://www.movistar.com.pe/');
                $infomovistar= file_get_html ( 'http://www.movistar.com.pe/' ) -> plaintext ;
                echo $infomovistar;           
                ?>
           </section>
    
    </div>
       
@endsection