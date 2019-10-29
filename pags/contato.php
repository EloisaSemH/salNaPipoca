<main class="container">

    <div class="row justify-content-center text-center">
        <h1>Contato</h1>
    </div>
    <article class="row justify-content-center">
        <form class="col-sm-12 col-md-8 col-lg-6" method="post" action="">
            <div class="form-group">
                <label for="exampleFormControlInput1">Nome</label>
                <input type="text" class="form-control" placeholder="Quentin Tarantino" required>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">E-mail</label>
                <input type="email" class="form-control" placeholder="salzinho@napipoca.com" required>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Assunto</label>
                <input type="text" class="form-control" placeholder="Sugestão" required>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Por onde nos conheceu?</label>
                <select class="form-control">
                    <option>Facebook</option>
                    <option>Instagram</option>
                    <option>Twitter</option>
                    <option>Google</option>
                    <option>Outro</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Digite seu texto</label>
                <textarea class="form-control" rows="3" required></textarea>
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
