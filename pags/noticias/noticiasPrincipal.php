<header class="text-center resenhaHeader p-5 text-light">
    <div class="m-5 p-3">
        <h1 class="font-weight-bold text-uppercase m-0 p-0">Notícias do cinema</h1>
        <small class="font-italic m-0 p-0">Por Cesar August</small>
    </div>
</header>
<nav class="navbar navbar-expand-lg d-none d-lg-block navbar-dark navColor ">
    <ul class="navbar-nav mr-auto justify-content-center">
        <li class="nav-item btn btn-danger mr-1">
            <a class="nav-link" href="#prin">Direto ao principal</a>
        </li>
        <li class="nav-item btn btn-danger mr-1">
            <a class="nav-link" href="index.php?pg=noticiasPrincipal&id=2" > Notícias mais recentes</a>
        </li>
        <li class="nav-item btn btn-danger mr-1">
            <a class="nav-link" href="index.php?pg=noticiasPrincipal&id=3">Notícias mais vistas</a>
        </li>
        <li class="nav-item btn btn-danger mr-1">
            <a class="nav-link" href="index.php?pg=noticiasPrincipal&id=4">Notícias recomendadas</a>
        </li>
    </ul>
</nav>
<div class="container bg-light">
    <div class="row pt-5 clearfix">
        <article class="justify-content-center col-md-8 col-lg-10" id="prin">
            <div class="text-center">
            </div>
            <p>Ficamos contentes por alegrar seu momento especial, se deseja encontrar um pouco de conteúdo sobre as notícias mais cativantes do cinema, o lugar é este!</p>
            <p>Dentro deste portal, esta sessão trás notícias sobre filmes, como fatos novos e interessantes sobre acontecimentos que envolvem o cinema </p>
            <p>Para navegar entre as notícias é bem simples. Basta clicar no link abaixo de cada cartão informativo e uma notícia se abrirá,e assim você poderá encontrar as informações sobre o que procura, bem fácil e prático não acha?</p>
        </article>
        <div class="col-md-4 col-lg-2 pt-2 d-none d-md-block ml-n2">
            <aside class="mb-5">
                <img src="images/noticias/jornalzinho.png" alt="Jornal minimalista com formato de balde com pipocas em cima dele">
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
    <!-- Aqui divide em 3 -->
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
    <!-- Aqui divide em 3 -->

    <div class="row justify-content-center mt-4 mb-0">
        <div class="card p-3 border-light bg-light" style="max-width: 1500px;">
            <div class="row no-gutters">
                <div class="col-md-4 text-right">
                    <img src="images/sobre/cesar.jpg" class="card-img rounded-circle w-50" alt="...">
                </div>
                <div class="col-md-7 mr-1">
                    <div class="card-body">
                        <h5 class="card-title">Cesar August</h5>
                        <p class="card-text">PAULISTA, de Vargem Grande. Formado em Tecnico de Rede de Computadores, atualmente cursando superior de Sistemas para Internet</p>
                        <p class="card-text"><small class="text-muted">R.A: 2650831913015</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>



</div>