<!doctype html>
<html lang="pt-BR">
<head>
    <script src="https://kit.fontawesome.com/3593c75a8c.js" crossorigin="anonymous"></script> 
    <meta charset="utf-8">
    <meta name="author" content="Bruno Nunes, Cesar August, Eloísa Carvalho, Kelly Louise">
    <meta name="description" content="O portal Sal na Pipoca foi desenvolvido para o Projeto Integrador do segundo semestre do curso Sistemas para a Internet da FATEC São Roque.">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estiloso.css" />
    <link rel="icon" type="image/png" href="images/favicon.png">
    <title>Sal na Pipoca</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark navColor fixed-top">
        <div class="text-center d-none d-lg-block d-xl-block float-left">
            <a href="index.php"><img src="images/salNaPipocaRodape.png" alt="Logotipo do Sal na Pipoca com um saco de pipoca com um óculos 3d, um saleiro jogando sal no mesmo, com escritas ao lado nos dizeres 'Sal na Pipoca'" class="w-50"></a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="d-lg-none d-xl-none m-1">
            <a href="index.php"><img src="images/favicon.png" alt="Logotipo do Sal na Pipoca com um saco de pipoca com um óculos 3d, um saleiro jogando sal no mesmo, com escritas ao lado nos dizeres 'Sal na Pipoca'"></a>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link " href="index.php">Início <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item d-none d-lg-block">
                    <a class="nav-link" href="index.php?pg=noticias&id=1">Notícias</a>
                </li>
                <li class="nav-item dropdown d-lg-none d-xl-none">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Notícias
                    </a>
                    <div class="dropdown-menu headerColor " aria-labelledby="navbarDropdown">
                        <a class="dropdown-item text-light" href="index.php?pg=noticias&id=1">Principal</a>
                        <a class="dropdown-item text-light" href="index.php?pg=noticias&id=2">Mais recentes</a>
                        <a class="dropdown-item text-light" href="index.php?pg=noticias&id=3">Mais vistas</a>
                        <a class="dropdown-item text-light" href="index.php?pg=noticias&id=4">Recomendados</a>
                    </div>
                </li>
                <li class="nav-item d-none d-lg-block">
                    <a class="nav-link" href="index.php?pg=resenhas">Resenhas</a>
                </li>
                <li class="nav-item dropdown d-lg-none d-xl-none">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Resenhas
                    </a>
                    <div class="dropdown-menu headerColor " aria-labelledby="navbarDropdown">
                        <a class="dropdown-item text-light" href="index.php?pg=resenhas">Principal</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-light" href="index.php?pg=resenhascategorias&cat=acao">Ação e aventura</a>
                        <a class="dropdown-item text-light" href="index.php?pg=resenhascategorias&cat=animacao">Animação</a>
                        <a class="dropdown-item text-light" href="index.php?pg=resenhascategorias&cat=comedia">Comédia</a>
                        <a class="dropdown-item text-light" href="index.php?pg=resenhascategorias&cat=cult">Cult</a>
                        <a class="dropdown-item text-light" href="index.php?pg=resenhascategorias&cat=drama">Drama</a>
                        <a class="dropdown-item text-light" href="index.php?pg=resenhascategorias&cat=fantasia">Fantasia</a>
                        <a class="dropdown-item text-light" href="index.php?pg=resenhascategorias&cat=ficcao">Ficção científica</a>
                        <a class="dropdown-item text-light" href="index.php?pg=resenhascategorias&cat=musical">Musical</a>
                        <a class="dropdown-item text-light" href="index.php?pg=resenhascategorias&cat=romance">Romance</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Listas
                    </a>
                    <div class="dropdown-menu headerColor " aria-labelledby="navbarDropdown">
                        <a class="dropdown-item text-light" href="index.php?pg=listas">Listas</a>
                        <a class="dropdown-item text-light" href="index.php?pg=top10">Top 10</a>
                        <a class="dropdown-item text-light" href="index.php?pg=salindica">Sal indica</a>
                        <a class="dropdown-item text-light" href="index.php?pg=adaptacoes">Adaptações</a>
                    </div>
                </li>
                <li class="nav-item d-none d-lg-block">
                    <a class="nav-link" href="index.php?pg=curiosidades">Curiosidades</a>
                </li>
                <li class="nav-item dropdown d-lg-none d-xl-none">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Curiosidades
                    </a>
                    <div class="dropdown-menu headerColor " aria-labelledby="navbarDropdown">
                        <a class="dropdown-item text-light" href="index.php?pg=curiosidades">Curiosidades</a>
                        <a class="dropdown-item text-light" href="index.php?pg=todas_materias">Todas as matérias</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?pg=sobre">Sobre nós</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?pg=contato">Contato</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0 justify-content-center">
                <input class="form-control mr-sm-2" type="search" placeholder="O que procura?" aria-label="Search">
                <button class="btn btn-danger my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
            </form>
        </div>
    </nav>