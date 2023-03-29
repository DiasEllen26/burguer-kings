<?php
    $id = (int)$id;
    $sqlProduto = "SELECT p.*, t.tipo FROM produto p inner join tipo t on (t.id = p.tipo_id) WHERE p.id = {$id} limit 1";
    $consulta = mysqli_query($con, $sqlProduto);
    $dados = mysqli_fetch_array($consulta);
    $tipo = $dados["tipo"];
    $imagem = $dados["foto"];
    $produto = $dados["produto"];
    $descricao = $dados["descricao"];
    $valor = $dados["valor"];
?>
<div class="row">
    <div class="col-12 col-md-4">
        <img src="imagens/<?=$imagem?>" alt="<?=$produto?>" class="w-100">
    </div>
    <div class="col-13 col-md-8">
        <div class="produtotitulo"><?=$produto?></div><br>
        <p><strong>Tipo: <?=$tipo?><strong></p><br>
        <p>R$<?=number_format($valor,2,",",".")?></p>
        <p><?=$descricao?></p>
    </div>
</div>