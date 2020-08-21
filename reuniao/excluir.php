<?php

include('../Condominio/config.php');
session_start();

$id = $_GET['id'];
echo"Você tem certeza que deseja excluir esta reunião?";
echo "<br>";
echo "<button type=\"button\" onclick=\"location.href='../reuniao/excluir_controler.php?id=".$id."'\">Sim</button>";
echo "<button type=\"button\" onclick=\"location.href='../home.php'\">Não</button>";
?>