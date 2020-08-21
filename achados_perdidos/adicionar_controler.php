<?php
include ('../Condominio/config.php');
session_start();

if($_POST['item']==""){
    echo "Por favor, informe o item encontrado!";
} else if($_POST['data']== ""){
    echo "Por favor, informe a data encontrado!";
} else if($_POST['local']==""){
    echo "Por favor, informe o local encontrado!";
} else{
    $item = $_POST['item'];
    $data = $_POST['data'];
    $id = $_SESSION['Usuario']['id'];
    $local = $_POST['local'];
    
   
    $sql = "INSERT INTO achados_perdidos (item,data,local_encontrado) VALUES 
           ('$item','$data','$local');";
    
    if($mysqli->query($sql) == true ){
        echo "Item cadastrado!";
    }else{
        echo "Erro ao cadastrar o item, contate o administrador do sistema!";
    }
}
$mysqli->close();
?>
<br>
<button type="button" onclick="location.href='adicionar.php'">Voltar</button>
