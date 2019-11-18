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
        
//    Noticias
    case 'noticiasPrincipal':
        include('pags/noticias/noticiasPrincipal.php');
        break;

        
//    Resenhas
    case 'resenhas':
        include('pags/resenhas/resenhas.php');
        break;
    case 'resenhascategorias':
        include('pags/resenhascategorias.php');
        break;
    case 'resenha':
        include('pags/resenha.php');
        break;
        
//    Listas
    case 'listas':
        include('pags/listas.php');
        break;
        
//    Curiosidades  
    case 'curiosidades':
        include('pags/curiosidades.php');
        break;
        
//    Outros
    case 'sobre':
        include('pags/sobre.php');
        break;
    case 'contato':
        include('pags/contato.php');
        break;
    default:
        include('pags/inicio.php');
        break;  
}                                                                                     

include_once('pags/-rodape.php');

?>