<?php

include('../Condominio/config.php');
session_start();

if($_GET['id'] !== $_SESSION['Usuario']['id']){
    echo"Você não tem permissão para cancelar essa reserva!";
} else{
    $id = $_GET['id'];
    
    $sql= "DELETE FROM reserva_salao WHERE ID = " . $id;
    
    if($mysqli->query($sql)){
        echo "Reserva cancelada!";
    } else{
        echo "Erro ao cancelar a reserva, contate o administrador do sistema!";
    }
    
$mysqli->close();    
}
?>
<br>
<button type="button" onclick="location.href='../home.php'">Voltar</button>
