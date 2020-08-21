<?php

include('../Condominio/config.php');

if($_POST['nome'] == ""){
    echo"Por favor, informe seu nome";
} else if($_POST['data'] == ""){
    echo"Por favor, informe a data da reserva";
}else if($_POST['horario'] == ""){
    echo"Por favor, informe o horário da reserva";
}else if($_POST['qtd_convidados'] == ""){
    echo"Por favor, informe a quantidade de convidados";
}else if($_POST['convidados'] == ""){
    echo"Por favor, informe o nome dos convidados";
}else{
    $nome = $_POST['nome'];
    $data = $_POST['data'];
    $hora = $_POST['horario'];
    $id = $_GET['id'];
    $qtd_convidados = $_POST['qtd_convidados'];
    $convidados = $_POST['convidados'];

$sql = "UPDATE reserva_salao SET id_condominos = '$id', data = '$data', hora = '$hora', convidados = '$convidados', qtd_convidados = '$qtd_convidados' WHERE id = " . $id;

if($mysqli->query($sql)){
    echo "Reserva editada!";
}else{
    echo "Erro ao editar a reserva, contate o administrador do sistema!";
}
}

$mysqli->close();
?>
<br>
<button type="button" onclick="location.href='../salao_festas/editar.php?id=<?php echo $id;?>'">Voltar</button>


