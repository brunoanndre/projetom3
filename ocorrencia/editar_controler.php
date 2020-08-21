<?php

include('../Condominio/config.php');

if($_POST['nome'] == ""){
    echo"Por favor, informe seu nome";
} else if($_POST['data'] == ""){
    echo"Por favor, informe a data da ocorrência";
}else if($_POST['hora'] == ""){
    echo"Por favor, informe o horário da ocorrência";
}else if($_POST['descricao'] == ""){
    echo"Por favor, informe a descrição da ocorrência";
}else{
    $nome = $_POST['nome'];
    $data = $_POST['data'];
    $hora = $_POST['hora'];
    $id = $_GET['id'];
    $descricao = $_POST['descricao'];

$sql = "UPDATE ocorrencia SET id_condominos = '$id', data = '$data', hora = '$hora', descricao = '$descricao ' WHERE id = " . $id;
if($mysqli->query($sql)){
    echo "Ocorrência editada!";
}else{
    echo "Erro ao editar a ocorrência, contate o administrador do sistema!";
}
}

$mysqli->close();
?>
<br>
<button type="button" onclick="location.href='../ocorrencia/editar.php?id=<?php echo $id;?>'">Voltar</button>


