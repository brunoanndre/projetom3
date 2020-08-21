<?php

include('../Condominio/config.php');
if($_POST['item'] == ""){
    echo"Por favor, informe o item encontrado!";
}else if($_POST['data'] == ""){
    echo"Por favor, informe a data encontrado!";
}else if($_POST['local'] == ""){
    echo"Por favor, informe o local encontrado";
}   else{
        $item = $_POST['item'];
        $data = $_POST['data'];
        $local = $_POST['local'];

$sql = "UPDATE achados_perdidos SET  item = '$item', data = '$data', local_encontrado = '$local' WHERE id = " . $_GET['id'];

if($mysqli->query($sql)){
    echo "Item editado!";
}else{
    echo "Erro ao editar o item, contate o administrador do sistema!";
}
}
$mysqli->close();
?>
<br>
<button type="button" onclick="location.href='../achados_perdidos/editar.php?id=<?php echo $_GET['id'];?>'">Voltar</button>


