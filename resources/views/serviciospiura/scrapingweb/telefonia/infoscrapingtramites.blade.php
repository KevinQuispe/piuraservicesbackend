@extends('layouts.master')
@section('title','Nueva')
@section('content')

    <div class="container">
    <section>   
              <h3><center>WEB SCRAPING CON TRAMITES-MOVISTAR <center></h3>
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