<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "burguerkings";

$con = mysqli_connect($servidor,$usuario,$senha,$banco) or die ("Não foi possível conectar com o banco");
 