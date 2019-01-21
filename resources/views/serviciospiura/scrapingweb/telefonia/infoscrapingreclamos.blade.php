@extends('layouts.master')
@section('title','Nueva')
@section('content')
    <h1>Reclamos - Movistar</h1>
    <?php
        include_once('../app/phpdom/simple_html_dom.php');                   
        // Create DOM from URL or file
        $html = file_get_html('http://www.movistar.com.pe/');
        $infomovistar= file_get_html ( 'http://www.movistar.com.pe/' ) -> plaintext ;
        echo $infomovistar;           
    ?>
@endsection