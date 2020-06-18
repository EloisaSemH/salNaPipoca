<main class="container bg-light pb-4 pt-5 mt-4">
    <div class="row justify-content-center text-center">
        <h1>Contato</h1>
    </div>
    <article class="row justify-content-center">
        <form class="col-sm-12 col-md-8 col-lg-6" method="post" action="">
            <div class="form-group">
                <label for="Campo para inserir o nome abaixo">Nome</label>
                <input type="text" class="form-control" placeholder="Quentin Tarantino" aria-label="Insira seu nome" required>
            </div>
            <div class="form-group">
                <label for="Campo para inserir o email abaixo">E-mail</label>
                <input type="email" class="form-control" placeholder="salzinho@napipoca.com" aria-label="Insira seu e-mail" required>
            </div>
            <div class="form-group">
                <label for="Campo para inserir o assunto abaixo">Assunto</label>
                <input type="text" class="form-control" placeholder="Sugestão" aria-label="Insira o assunto" required>
            </div>
            <div class="form-group">
                <label for="Menu suspenso de seleção para dizer de onde nos conheceu abaixo">Por onde nos conheceu?</label>
                <select class="form-control" aria-label="Insira por onde nos conheceu" >
                    <option>Facebook</option>
                    <option>Instagram</option>
                    <option>Twitter</option>
                    <option>Google</option>
                    <option>Outro</option>
                </select>
            </div>
            <div class="form-group">
                <label for="Campo para inserir o seu texto abaixo">Digite seu texto</label>
                <textarea class="form-control" rows="3" required aria-label="Insira o texto"></textarea>
            </div>
            <div class="form-group text-center">
                <button class="btn btn-danger my-2 my-sm-0" type="submit" name="enviar">Enviar</button>
                <button class="btn btn-outline-danger my-2 my-sm-0" type="reset">Limpar</button>
            </div>
        </form>
    </article>
</main>
<?php
if(isset($_POST['enviar'])){
    ?>
<script type="text/javascript">
    alert("Enviado com sucesso!");
    document.location.href = "index.php";
</script>
<?php
}
?>
