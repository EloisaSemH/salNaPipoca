<?php include_once('pags/resenhas/resenhacabecalho.php');
$i = 1;
while(file_exists('pags/resenhas/textos/resenha' . $i . '.txt')){
    $prox = $i + 1;
    if(!file_exists('pags/resenhas/textos/resenha' . $prox . '.txt')){
        $arquivo = fopen ('pags/resenhas/textos/resenha' . $i . '.txt', 'r');
        fgets($arquivo, 1024);
?>
<main class="container bg-light pt-4 pb-2">
    <div class="row justify-content-center">
        <div class="card m-3 mb-4 mt-0" style="max-width: 1500px;">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="images\resenhas\materia\<?php echo fgets($arquivo, 1024); ?>" class="card-img"
                        alt="<?php echo fgets($arquivo, 1024); ?>">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo fgets($arquivo, 1024); ?></h5>
                        <p class="card-text text-truncate"><?php
                            $texto = fgets($arquivo, 1024);
                            $frases = explode('.', $texto);
                            echo $frases[1] . '...';
                        ?></p>
                        <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                        <a class="btn btn-outline-danger mt-3" href="index.php?pg=resenha&idR=<?php echo $i;?>">Ver
                            resenha!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card-deck">
        <?php         
        for($x = 1; $x <= 4; $x++){
            $ante = $i - $x;
            if(file_exists('pags/resenhas/textos/resenha' . $ante . '.txt')){
                $arquivo = fopen ('pags/resenhas/textos/resenha' . $ante . '.txt', 'r');
                fgets($arquivo, 1024); 
?>
        <div class="card cardMeio">
            <img src="images/resenhas/materia/<?php echo fgets($arquivo, 1024); ?>" class="card-img-top"
                alt="<?php echo fgets($arquivo, 1024); ?>">
            <div class="card-body">
                <h5 class="card-title"><?php echo fgets($arquivo, 1024); ?></h5>
                <p class="card-text text-truncate"><?php
                 $texto = fgets($arquivo, 1024);
                 $frases = explode('.', $texto);
                 echo $frases[1] . '...';
                 ?></p>
            </div>
            <a href="index.php?pg=resenha&idR=<?php echo $ante; ?>" class="card-footer navColor text-light text-center">
                Ver mais!
            </a>
        </div>
        <?php
        
            }
        }
    }
        $i++;
}
    ?>
    </div>
    <div class="row blog mt-4 mb-0 d-none d-lg-block d-xl-block">
        <div class="col-md-12 p-0">
            <div id="blogCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner p-0">
                    <div class="carousel-item p-0 active">
                        <div class="row justify-content-center text-center p-0">
                            <div class="col-md-4 p-0 m-0">
                                <a href="index.php?pg=resenhascategorias&cat=acao">
                                    <img src="images/resenhas/acao.jpg" alt="Image" class="w-100">
                                </a>
                            </div>
                            <div class="col-md-4 p-0 m-0">
                                <a href="index.php?pg=resenhascategorias&cat=animacao">
                                    <img src="images/resenhas/animacao.jpg" alt="Image" class="w-100">
                                </a>
                            </div>
                            <div class="col-md-4 p-0 m-0">
                                <a href="index.php?pg=resenhascategorias&cat=comedia">
                                    <img src="images/resenhas/comedia.jpg" alt="Image" class="w-100">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item p-0">
                        <div class="row justify-content-center text-center p-0">
                            <div class="col-md-4 p-0 m-0">
                                <a href="index.php?pg=resenhascategorias&cat=cult">
                                    <img src="images/resenhas/cult.jpg" alt="Image" class="w-100">
                                </a>
                            </div>
                            <div class="col-md-4 p-0 m-0">
                                <a href="index.php?pg=resenhascategorias&cat=drama">
                                    <img src="images/resenhas/drama.jpg" alt="Image" class="w-100">
                                </a>
                            </div>
                            <div class="col-md-4 p-0 m-0">
                                <a href="index.php?pg=resenhascategorias&cat=drama">
                                    <img src="images/resenhas/fantasia.jpg" alt="Image" class="w-100">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item p-0">
                        <div class="row justify-content-center text-center p-0">
                            <div class="col-md-4 p-0 m-0">
                                <a href="index.php?pg=resenhascategorias&cat=ficcao">
                                    <img src="images/resenhas/ficcao.jpg" alt="Image" class="w-100">
                                </a>
                            </div>
                            <div class="col-md-4 p-0 m-0">
                                <a href="index.php?pg=resenhascategorias&cat=musical">
                                    <img src="images/resenhas/musical.jpg" alt="Image" class="w-100">
                                </a>
                            </div>
                            <div class="col-md-4 p-0 m-0">
                                <a href="index.php?pg=resenhascategorias&cat=romance">
                                    <img src="images/resenhas/romance.jpg" alt="Image" class="w-100">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#blogCarousel" role="button" data-slide="prev" style="width: 5%;">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#blogCarousel" role="button" data-slide="next" style="width: 5%;">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <?php include_once('pags/resenhas/resenharodape.php'); ?>
</main>