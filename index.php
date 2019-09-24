<?php

setlocale(LC_ALL, 'pt_BR');
date_default_timezone_set('America/Sao_Paulo');

@$pg = $_GET['pg'];
    if(is_null($pg)){
        $pg = 'inicio';
    }

include_once('pags/-cabecalho.php');

switch($pg) {
    //Menu
    case 'inicio':
        include('pags/inicio.php');
        break;
    case 'noticias':
        include('pags/noticias.php');
        break;
    case 'resenhas':
        include('pags/resenhas.php');
        break;
    case 'listas':
        include('pags/listas.php');
        break;
    case 'curiosidades':
        include('pags/curiosidades.php');
        break;
    case 'sobre':
        include('pags/sobre.php');
        break;
    case 'contato':
        include('pags/cadcontatoastro.php');
        break;
    default:
        include('pags/inicio.php');
        break;  
}

include_once('pags/-rodape.php');

?>