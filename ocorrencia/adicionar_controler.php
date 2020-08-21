<?php
include ('../Condominio/config.php');
session_start();

if($_POST['data']==""){
    echo "Por favor, informe a data da ocorrência!";
} else if($_POST['hora']== ""){
    echo "Por favor, informe a hora da ocorrência!";
} else if($_POST['descricao']==""){
    echo "Por favor, informe a descrição da ocorrência!";
} else{
    $data = $_POST['data'];
    $id = $_SESSION['Usuario']['id'];
    $hora = $_POST['hora'];
    $descricao = $_POST['descricao'];
   
    $sql = "INSERT INTO ocorrencia (id_condominos,data,hora,descricao) VALUES 
           ('$id','$data','$hora','$descricao')";
    
    if($mysqli->query($sql) == true ){
        echo "Ocorrência cadastrada!";
    }else{
        echo "Erro ao cadastrar a ocorrência, contate o administrador do sistema!";
    }
}
$mysqli->close();
?>
<br>
<button type="button" onclick="location.href='adicionar.php'">Voltar</button>
