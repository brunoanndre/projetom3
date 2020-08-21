<?php
include ('../Condominio/config.php');
session_start();

if($_POST['data']==""){
    echo "Por favor, informe a data da reunião!";
} else if($_POST['hora']== ""){
    echo "Por favor, informe a hora da reunião!";
} else if($_POST['assunto']==""){
    echo "Por favor, informe o assunto da reunião!";
} else{
    $data = $_POST['data'];
    $id = $_SESSION['Usuario']['id'];
    $hora = $_POST['hora'];
    $assunto = $_POST['assunto'];
   
   
    $sql = "INSERT INTO reuniao (data,hora,assunto,id_condominos) VALUES 
           ('$data','$hora','$assunto','$id')";
    
    if($mysqli->query($sql) == true ){
        echo "Reunião agendada!";
    }else{
        echo "Erro ao agendar a reunião, contate o administrador do sistema!";
    }
}
$mysqli->close();
?>
<br>
<button type="button" onclick="location.href='adicionar.php'">Voltar</button>
