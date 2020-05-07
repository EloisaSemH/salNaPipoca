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
    case 'noticias':
        include('pags/noticias/noticiasPrincipal.php');
        break;
    case 'todasnoticias':
        include('pags/noticias/todasnoticias.php');
        break;
    case 'noticia':
        include('pags/noticia.php');
        break;
//    Resenhas
    case 'resenhas':
        include('pags/resenhas/resenhas.php');
        break;
    case 'resenhascategorias':
        include('pags/resenhas/resenhascategorias.php');
        break;
    case 'resenha':
        include('pags/resenhas/resenha.php');
        break;
//    Listas
    case 'listas':
        include('pags/listas/listas_filmes.php');
        break;
    case 'top10':
        include('pags/listas/top_sal.php');
    break;
    case 'salindica':
        include('pags/listas/sal_indica.php');
        break;
    case 'adaptacoes':
        include('pags/listas/adaptacoes_sal.php');
        break;
//    Curiosidades  
    case 'curiosidades':
        include('pags/curiosidades/index.php');
        break;
    case 'todas_materias':
        include('pags/curiosidades/todas_materias.php');
        break;
    case 'alfredhitchcock':
            include('pags/curiosidades/alfredhitchcock.php');
            break;
    case 'atrizeseatsexy':
        include('pags/curiosidades/atrizeseatsexy.php');
        break;
    case 'cinemanovo':
        include('pags/curiosidades/cinemanovo.php');
        break;
    case 'tarantiniano':
        include('pags/curiosidades/tarantiniano.php');
        break;
//    Outros
    case 'sobre':
        include('pags/sobre.php');
        break;
    case 'contato':
        include('pags/contato.php');
        break;
    case 'normas':
        include('pags/normas.php');
        break;
    default:
        include('pags/inicio.php');
        break;  
}                                                                                     
include_once('pags/-rodape.php');
?>