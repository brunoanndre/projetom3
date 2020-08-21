<?php
include ('../Condominio/config.php');
session_start();

if($_POST['nome']==""){
    echo "Por favor, informe seu nome!.";
} else if($_POST['data']== ""){
    echo "Por favor, informe a data da reserva!";
} else if($_POST['horario'] == ""){
    echo "Por favor, informe o horário da reserva!";
} else if($_POST['qtd_convidados'] == ""){
    echo "Por favor, informe a quantidade de convidados!";
} else if($_POST['convidados']==""){
    echo "Por favor, informe o nome dos convidados!";
} else{
    $nome = $_POST['nome'];
    $id = $_SESSION['Usuario']['id'];
    $data = $_POST['data'];
    $horario = $_POST['horario'];
    $qtd_convidados = $_POST['qtd_convidados'];
    $convidados = $_POST['convidados'];
   
    $sql = "INSERT INTO reserva_salao (id_condominos,data,hora,convidados,qtd_convidados) VALUES
('$id','$data','$horario','$convidados','$qtd_convidados');";
    
    if($mysqli->query($sql) == true ){
        echo "Reserva realizada!";
    }else{
        echo "Erro ao realizar a reserva, contate o administrador do sistema!";
    }
}
$mysqli->close();
?>
<br>
<button type="button" onclick="location.href='adicionar.php'">Voltar</button>
