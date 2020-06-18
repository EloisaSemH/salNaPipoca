<?php include_once('pags/resenhas/resenhacabecalho.php'); 
@$idR = $_GET['idR'];
if(is_null($idR)){
    ?>
<script type="text/javascript">
alert("Selecione uma resenha!");
document.location.href = "index.php?pg=resenhas";
</script>
<?php
}
?>
<main class="container bg-light pt-4 pb-3 mb-0">
    
    <?php
if(file_exists('pags/resenhas/textos/resenha' . $idR . '.txt')){
    $arquivo = fopen ('pags/resenhas/textos/resenha' . $idR . '.txt', 'r');
    $linhaCat = fgets($arquivo, 1024);
    $aqrCats = explode(';', $linhaCat);
?>
    <article class="mb-3 col-sm-12 col-md-12 col-lg-8 col-xl-8 p-0 float-left">
        <img src="images\resenhas\materia\<?php echo $linha = fgets($arquivo, 1024); ?>" class="card-img"
            alt="<?php echo $linha = fgets($arquivo, 1024); ?>" class="w-100">
        <h2 class="mt-3 mb-3"><?php echo $linha = fgets($arquivo, 1024); ?></h2>
        <?php
    while(!feof($arquivo)){
                echo '<p>' . $linha = fgets($arquivo, 1024) . '</p>';
    }
        echo '<small>';
    for($x = 0; $x < (count($aqrCats) - 1); $x++){
        echo '<a href="index.php?pg=resenhascategorias&cat=' . $aqrCats[$x] . '">' . $aqrCats[$x] . '</a>, ';
    }
    echo '<a href="index.php?pg=resenhas">resenhas</a>.</small>';
}
?>
    </article>
    <aside class="col-md-4 float-right d-none d-lg-block d-xl-block text-center">
        <h4>Filmes 5/5</h4>
        <ul class="list-group list-group-flush text-left">
            <li class="list-group-item bg-light"><a href="index.php?pg=resenha&idR=13">Homem Aranha: No Aranha Verso
                    (2018)</a></li>
            <li class="list-group-item bg-light"><a href="index.php?pg=resenha&idR=14">La La Land (2016)</a></li>
            <li class="list-group-item bg-light"><a href="index.php?pg=resenha&idR=15">Carol (2015)</a></li>
            <li class="list-group-item bg-light"><a href="index.php?pg=resenha&idR=5">A Origem (2010)</a></li>
            <li class="list-group-item bg-light"><a href="index.php?pg=resenha&idR=1">Psicose (1960)</a></li>
        </ul>
        <img src="images/resenhas/propagLetsGo.gif" class="w-100 mt-4">
    </aside>
    <div class="clearfix"></div>
    <?php include_once('pags/resenhas/resenharodape.php'); ?>
</main>