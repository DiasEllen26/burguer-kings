<?php
    $sqlBanner = "SELECT * FROM banner ORDER BY RAND() LIMIT 1";
    $consultaBanner = mysqli_query($con,$sqlBanner);
    $dados = mysqli_fetch_array($consultaBanner);
    $titulo = $dados["titulo"];
    $banner = $dados["banner"];
?>
<div class="row">
    <div class="home">
        <img src="imagens/<?=$banner?>" alt="<?=$titulo?>" class= "w-100">
            <div class="descricao ">
                    <h1 class="titulo">Burger King®</h1>
                    <hr class="separador"><br>
                    <p>Os Melhores Combos com os Melhores Preços que preparamos para Você. Venha descobrir!</p>
                    <a class="mbtn1 btn" href ="paginas/produtos">Todos os produtos</a>
            </div>
    </div>
</div>
