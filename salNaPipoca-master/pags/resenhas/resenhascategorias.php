<?php include_once('pags/resenhas/resenhacabecalho.php'); 
@$cat = $_GET['cat'];
if(is_null($cat)){
    ?>
        <script type="text/javascript">
            alert("Selecione uma categoria!");
            document.location.href = "index.php?pg=resenhas";
        </script>
    <?php
}
switch($cat){
  case 'acao':
    $categoriaCorreta = 'Ação e aventura';
  break;
  case 'animacao':
    $categoriaCorreta = 'Animação';
  break;
  case 'comedia':
    $categoriaCorreta = 'Comédia';
  break;
  case 'cult':
    $categoriaCorreta = 'Cult';
  break;
  case 'drama':
    $categoriaCorreta = 'Drama';
  break;
  case 'fantasia':
    $categoriaCorreta = 'Fantasia';
  break;
  case 'ficcao':
    $categoriaCorreta = 'Ficção científica';
  break;
  case 'musical':
    $categoriaCorreta = 'Musical';
  break;
  case 'romance':
    $categoriaCorreta = 'Romance';
  break;
  case 'nacional':
    $categoriaCorreta = 'Nacional';
  break;
  default:
    $categoriaCorreta = 'Categoria não encontrada!';
  break;
}
?>
<main class="container bg-light pt-4 pb-4 mb-0 clearfix">
<aside class="col-md-4 float-right d-none d-lg-block d-xl-block text-center">
<h4>Filmes 5/5</h4>
<ul class="list-group list-group-flush text-left">
  <li class="list-group-item bg-light"><a href="index.php?pg=resenha&idR=13">Homem Aranha: No Aranha Verso (2018)</a></li>
  <li class="list-group-item bg-light"><a href="index.php?pg=resenha&idR=14">La La Land (2016)</a></li>
  <li class="list-group-item bg-light"><a href="index.php?pg=resenha&idR=15">Carol (2015)</a></li>
  <li class="list-group-item bg-light"><a href="index.php?pg=resenha&idR=5">A Origem (2010)</a></li>
  <li class="list-group-item bg-light"><a href="index.php?pg=resenha&idR=1">Psicose (1960)</a></li>
</ul>
<img src="images/resenhas/propagLetsGo.gif" class="w-100 mt-4">
</aside>
<h2 class="font-weight-bold mb-3"><?php echo $categoriaCorreta; ?></h2>
<?php
$i = 15;
$foi = 0;
while(file_exists('pags/resenhas/textos/resenha' . $i . '.txt')){
    $arquivo = fopen ('pags/resenhas/textos/resenha' . $i . '.txt', 'r');
    $linhaCat = fgets($arquivo, 1024);
    $aqrCats = explode(';', $linhaCat);
    for($x = 0; $x < count($aqrCats); $x++){
        if($aqrCats[$x] == $cat || $aqrCats[$x][1] == $cat || $aqrCats[$x][2] == $cat && $foi < 10){
            $foi++;
?>
<section class="card mb-3 col-sm-12 col-md-12 col-lg-8 col-xl-8 p-0" >
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="images\resenhas\materia\<?php echo $linha = fgets($arquivo, 1024); ?>" class="card-img" alt="<?php echo $linha = fgets($arquivo, 1024); ?>">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?php echo $linha = fgets($arquivo, 1024); ?></h5>
        <p class="card-text text-truncate"><?php echo $linha = fgets($arquivo, 1024); ?></p>
        <a href="index.php?pg=resenha&idR=<?php echo $i; ?>" class="btn btn-outline-danger">Ver resenha!</a>
      </div>
    </div>
  </div>
</section>
<?php
        }
        
    }

    $i--;
}
if($foi == 0){
      echo '<p>Desculpe, não foi possível encontrar nenhum resultado desta categoria.</p>';
    }
?>
</main>