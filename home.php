<!DOCTYPE html>
<?php 
include ('config.php');
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Condominio Sol Nascente</title>
    </head>
    <body>
    <center><h1>Condomínio Sol Nascente</h1></center>
    <br>
    <button type="button" onclick="location.href='/logout.php'">Encerra sessão</button>
        <h2>Salão de Festas</h2>
        <button type="button" onclick="location.href= '/salao_festas/adicionar.php' ">Solicitar reserva</button>
        <br><br>
        <table border="1px">
            <tr>
                <th>Nome</th>
                <th>Data</th>
                <th>Horário</th>
                <th>Opções</th>
            </tr>
        <?php
       
        $sql = ("SELECT c.id,nome,data,hora FROM reserva_salao rs
                INNER JOIN condominos c ON rs.id_condominos = c.id ORDER BY DATA;");
        
        if($result = $mysqli->query($sql)){ 
            while($row = $result->fetch_assoc()){
                echo "<tr>";
                echo "<td>" . $row['nome']."</td>";
                echo "<td>" . $row['data']."</td>";
                echo "<td>" . $row['hora']. "</td>";
                echo "<td>";
                echo "<button type=\"button\" onclick=\"location.href = '/salao_festas/editar.php?id=". $row['id']."'\">Editar reserva</button>";
                echo "<button type=\"button\" onclick=\"location.href = '/salao_festas/excluir.php?id=".$row['id']."'\">Excluir reserva</button>";
                echo "</td>";
                echo "</tr>";
            }
        }
     
        ?>       
        </table>
        <br>
 
        <h2>Ocorrências</h2>
        <button type="button" onclick="ocorrencia/cadastrar.php">Cadastrar</button>
        <br><br>
        <table border="1px">
            <tr>
                <th>Nome</th>
                <th>Data</th>
                <th>Horário</th>
                <th>Descrição</th>
                <th>Opções</th>
            </tr>
            <td>Nome</td>
            <td>Data</td>
            <td>Hora</td>
            <td>Descrição</td>
         
            <td>     
                <button type="button" onclick="ocorrencia/editar.php">Editar</button>
                <button type="button" onclick="ocorrencia/excluir.php">Excluir</button>
                
            </td>
            
        </table>
        <br>
        <?php
              
            echo '<h2>Achados e Perdidos</h2>';
            if ($_SESSION['Usuario']['funcao'] !== '1' and $_SESSION['Usuario']['funcao'] !== '2' AND $_SESSION['Usuario']['funcao'] !== '0' ){ 
            echo '<button type="button" onclick="achados_perdidos/adicionar.php">Adicionar</button>';
            echo '<br><br>';}
            echo '<table border="1px">';
            echo '<tr>';
            echo '<th>Item</th>';
            echo '<th>Local Encontrado</th>';
            echo '<th>Data</th>';
            if ($_SESSION['Usuario']['funcao'] !== '1' and $_SESSION['Usuario']['funcao'] !== '2' AND $_SESSION['Usuario']['funcao'] !== '0' ){ 
                echo '<th>Opções</th>';  
            }
                echo '</tr>';
                echo '<td>Item</td>';
                echo '<td>Local</td>';
                echo '<td>Data</td>';            
            if ($_SESSION['Usuario']['funcao'] !== '1' and $_SESSION['Usuario']['funcao'] !== '2' AND $_SESSION['Usuario']['funcao'] = '0'){ 
                echo '<td>'; 
                echo '<button type="button" onclick="achados_perdidos/editar.php">Editar</button>';
                echo '<button type="button" onclick="achados_perdidos/excluir.php">Excluir</button>';
                echo '</td>';   
            }
            echo '</table>';   
        ?>  
        <?php
        echo '<br>';
        echo '<h2>Reuniões</h2>';
        if ($_SESSION['Usuario']['funcao'] == '1' or $_SESSION['Usuario']['funcao'] == '2'){ 
        echo '<button type="button" onclick="reuniao/adicionar.php">Agendar</button>';
        echo '<br><br>';}
        echo '<table border="1px">';
        echo '<tr>';
        echo '<th>Data</th>';
        echo '<th>Hora</th>';
        echo '<th>Assunto</th>';
        if ($_SESSION['Usuario']['funcao'] == '1' or $_SESSION['Usuario']['funcao'] == '2'){ 
        echo '<th>Opções</th>';
        }
        echo '</tr>';
        echo '<td>Data</td>';
        echo '<td>Hora</td>';
        echo '<td>Assunto</td>';
        if ($_SESSION['Usuario']['funcao'] == '1' or $_SESSION['Usuario']['funcao'] == '2'){
         echo '<td>';
        echo '<button type="button" onclick="reuniao/editar.php">Editar</button>';
        echo '<button type="button" onclick="reuniao/excluir.php">Excluir</button>';
        echo '</td>';}
        echo '</table>';
            ?>
    </body>
</html>
