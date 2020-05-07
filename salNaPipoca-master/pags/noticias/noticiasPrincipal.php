<header class="text-center resenhaHeader p-5 text-light">
    <div class="m-lg-5 p-3">
        <h1 class="font-weight-bold text-uppercase m-0 p-0">Notícias</h1>
        <small class="font-italic m-0 p-0">Por Cesar August</small>
    </div>
</header>
<nav class="navbar navbar-expand-lg d-none d-lg-block navbar-dark navColor ">
    <ul class="navbar-nav mr-auto justify-content-center">
        <li class="nav-item">
            <a class="nav-link" href="index.php?pg=noticias&id=2">Mais recentes</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="index.php?pg=noticias&id=3">Mais vistas</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="index.php?pg=noticias&id=4">Recomendados</a>
        </li>
    </ul>
</nav>
<div class="container bg-light">
    <div class="row pt-5 clearfix">
        <article class="justify-content-center col-md-8 col-lg-10">
            <div class="text-center">
                <h1>Notícias do cinema</h1>
            </div>
            <p>Fico feliz de estar alegrando seu momento especial, se desejas encontrar um pouco de conteúdo sincero
                sobre as notícias mais cativantes do cinema o lugar é este!</p>
            <p>Dentro deste portal, esta sessão poderá lhe prover notícias sobre filmes, isso já está bem claro
                devido a
                seu título, mas o que isso significa? Em linhas gerais, esta parte do portal irá lhe proporcionar
                fatos
                novos e interessnates que envolvem o cinema </p>
        </article>
        <div class="col-md-4 col-lg-2 pt-2 d-none d-md-block ml-n2">
            <aside class="mb-5">
                <img src="images/noticias/jornalzinho.png" alt="Imagem bonita que flutua em volta do article">
            </aside>
        </div>
    </div>
    <div class="row">
        <?php
        $id = $_GET['id'];
        if($id == '1'){ 
            include('pags/noticias/cards/card1.php');
            include('pags/noticias/cards/card2.php');
            include('pags/noticias/cards/card3.php');
        }
        if ($id == '2') {
            include('pags/noticias/cards/card4.php');
            include('pags/noticias/cards/card5.php');
            include('pags/noticias/cards/card6.php');
        }
        if ($id == '3') {
            include('pags/noticias/cards/card6.php');
            include('pags/noticias/cards/card5.php');
            include('pags/noticias/cards/card4.php');
        }
        if ($id == '4') {
            include('pags/noticias/cards/card3.php');
            include('pags/noticias/cards/card2.php');
            include('pags/noticias/cards/card1.php');
        }
        ?>
    </div>
    <div class="row">
        <?php
        if($id == '1'){
            include('pags/noticias/cards/card4.php');
            include('pags/noticias/cards/card5.php');
            include('pags/noticias/cards/card6.php');
        }
        if ($id == '2') {
            include('pags/noticias/cards/card1.php');
            include('pags/noticias/cards/card2.php');
            include('pags/noticias/cards/card3.php');
        }
        if ($id == '3') {
            include('pags/noticias/cards/card3.php');
            include('pags/noticias/cards/card2.php');
            include('pags/noticias/cards/card1.php');
        }
        if ($id == '4') {
            include('pags/noticias/cards/card6.php');
            include('pags/noticias/cards/card5.php');
            include('pags/noticias/cards/card4.php');
        }
        ?>
    </div>
    <div class="row justify-content-center mt-4 mb-0">
        <div class="card p-3 border-light bg-light" style="max-width: 1500px;">
            <div class="row no-gutters">
                <div class="col-md-4 text-right">
                    <img src="images/sobre/cesar.jpg" class="card-img rounded-circle w-50" alt="...">
                </div>
                <div class="col-md-7 mr-1">
                    <div class="card-body">
                        <h5 class="card-title">Cesar August</h5>
                        <p class="card-text">PAULISTA, de Vargem Grande. Formado em Tecnico de Rede de Computadores,
                            atualmente cursando superior de Sistemas para Internet</p>
                        <p class="card-text"><small class="text-muted">R.A: 2650831913015</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>