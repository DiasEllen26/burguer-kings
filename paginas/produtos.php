<div class="row">
    <div class="produtotitulo">Todos os produtos</div>
    <?php
    if ($_POST) {
        $pesquisa = $_POST["pesquisa"];
        $sqlProduto = "SELECT * FROM produto WHERE produto LIKE '{$pesquisa}%'";
        $consultaProduto = mysqli_query($con, $sqlProduto);

        if ($consultaProduto->num_rows == 0) {
            require "paginas/erro.php";
        }

        while ($dados = mysqli_fetch_array($consultaProduto)) {
            $id = $dados["id"];
            $produto = $dados["produto"];
            $imagem = $dados["foto"]; ?>

            <div class="col-12 col-md-4 text-center p-2">
                <div class="card ">
                    <img src="imagens/<?= $imagem ?>" alt="<?= $produto ?>">
                    <p><strong><?= $produto ?></strong></p>
                    <p><a href="produto/<?= $id ?>" class="mbtn3">Detalhes</a></p>
                </div>
            </div>
        <?php }
    } else {
        $sqlProduto = "SELECT * FROM produto";
        $consultaProduto = mysqli_query($con, $sqlProduto);
        while ($dados = mysqli_fetch_array($consultaProduto)) {
            $id = $dados["id"];
            $produto = $dados["produto"];
            $imagem = $dados["foto"]; ?>

            <div class="col-12 col-md-4 text-center p-2">
                <div class="card ">
                    <img src="imagens/<?= $imagem ?>" alt="<?= $produto ?>">
                    <p><strong><?= $produto ?></strong></p>
                    <p><a href="produto/<?= $id ?>" class="mbtn3">Detalhes</a></p>
                </div>
            </div>
    <?php }
    }
    ?>
</div>