<?php

include('../Condominio/config.php');
session_start();

if($_GET['id'] !== $_SESSION['Usuario']['id']){
    echo"Você não tem permissão para excluir essa ocorrência!";
    echo "<br>";
    echo "<button type=\"button\" onclick=\"location.href='../home.php'\">Voltar</button>";
} else{
    $id = $_GET['id'];
    echo"Você tem certeza que deseja excluir esta ocorrência?";
    echo "<br>";
    echo "<button type=\"button\" onclick=\"location.href='../ocorrencia/excluir_controler.php?id=".$id."'\">Sim</button>";
    echo "<button type=\"button\" onclick=\"location.href='../home.php'\">Não</button>";
}?>