<?php
include('../Condominio/config.php');
session_start();

if($_SESSION['Usuario']['id_cargo']== 1){
 $id = $_GET['id'];
    $sql= "DELETE FROM achados_perdidos WHERE id = " . $id;
    if($mysqli->query($sql)){
        echo "Item excluído!";
    } else{
        echo "Erro ao excluir o item, contate o administrador do sistema!";
    }
}
$mysqli->close();    

?>
<br>
<button type="button" onclick="location.href='../home.php'">Voltar</button>

