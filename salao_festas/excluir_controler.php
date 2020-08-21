<?php
include('../Condominio/config.php');
session_start();

if($_GET['id'] == $_SESSION['Usuario']['id']){
 $id = $_GET['id'];

    $sql= "DELETE FROM reserva_salao WHERE id_condominos = " . $id;
    
    if($mysqli->query($sql)){
        echo "Reserva cancelada!";
    } else{
        echo "Erro ao cancelar a reserva, contate o administrador do sistema!";
    }
}
$mysqli->close();    

?>
<br>
<button type="button" onclick="location.href='../home.php'">Voltar</button>

