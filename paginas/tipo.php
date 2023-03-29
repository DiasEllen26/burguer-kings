<?php 
    //validar se o id está em branco
    $id = (int)$id;
    //selecionar o tipo
    $sqlTipo = "SELECT * FROM tipo WHERE id={$id}";
    $consulta = mysqli_query($con,$sqlTipo);
    $dados = mysqli_fetch_array($consulta);
    $tipo = $dados["tipo"];
?>
<h2 class="text-center"><?=$tipo?></h2>
<div class="row">
    <?php
    $sqlProduto="SELECT id, produto, valor, foto FROM produto WHERE tipo_id={$id}";
    $consulta = mysqli_query($con, $sqlProduto);
    while($dados = mysqli_fetch_array($consulta)){
        $id = $dados["id"];
        $valor = $dados["valor"];
        $imagem = $dados["foto"];
        $produto = $dados["produto"];
     ?>
    <div class="col-12 col-md-4">
        <div class="card text-center">
            <img src="imagens/<?=$imagem?>" alt="<?=$imagem?>">
            <p><strong><?=$produto?></strong></p>
            <p>R$<?=number_format($valor,2,",",".")?></p>
            <p><a href="produto/<?=$id?>" class="mbtn3">Detalhes do Produto</a></p>
        </div>
    </div>
    <?php } ?>
</div>