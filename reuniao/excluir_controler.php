<?php
include('../Condominio/config.php');
session_start();

if($_SESSION['Usuario']['funcao']== 1 or $_SESSION['Usuario']['funcao'] == 2){
 $id = $_GET['id'];
    $sql= "DELETE FROM reuniao WHERE id = " . $id;
    if($mysqli->query($sql)){
        echo "Reunião excluída!";
    } else{
        echo "Erro ao excluir a reunião, contate o administrador do sistema!";
    }
}
$mysqli->close();    

?>
<br>
<button type="button" onclick="location.href='../home.php'">Voltar</button>

