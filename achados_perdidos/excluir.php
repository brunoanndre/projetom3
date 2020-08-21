<?php

include('../Condominio/config.php');
session_start();

$id = $_GET['id'];
echo"Você tem certeza que deseja excluir este item?";
echo "<br>";
echo "<button type=\"button\" onclick=\"location.href='../achados_perdidos/excluir_controler.php?id=".$id."'\">Sim</button>";
echo "<button type=\"button\" onclick=\"location.href='../home.php'\">Não</button>";
?>