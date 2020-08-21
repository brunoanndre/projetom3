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
                echo "<button type=\"button\" onclick=\"location.href = '/salao_festas/excluir.php?id=".$row['id']."'\">Cancelar reserva</button>";
                echo "</td>";
                echo "</tr>";
            }
        }
     
        ?>       
        </table>
        <br>
 
        <h2>Ocorrências</h2>
        <button type="button" onclick="location.href= '../ocorrencia/adicionar.php'">Cadastrar</button>
        <br><br>
        <table border="1px">
            <tr>
                <th>Nome</th>
                <th>Data</th>
                <th>Horário</th>
                <th>Descrição</th>
                <th>Opções</th>
            </tr>
            <?php
            $sql= "SELECT nome,data,hora,descricao,c.id FROM ocorrencia o INNER JOIN condominos c ON o.id_condominos = c.id";
            if($result = $mysqli->query($sql)){
                while($row= $result->fetch_assoc()){
                echo "<tr>";
                echo "<td>".$row['nome']."</td>";
                echo "<td>".$row['data']."</td>";
                echo "<td>".$row['hora']."</td>";
                echo "<td>".$row['descricao']."</td>";
                echo "<td>";
                echo "<button type=\"button\" onclick=\"location.href='ocorrencia/editar.php?id=". $row['id']."'\">Editar</button>";
                echo "<button type=\"button\" onclick=\"location.href='ocorrencia/excluir.php?id=". $row['id']."'\">Excluir</button>";
                echo "</td>";
                }
            }
             ?>
        </table>
        <br>
        <?php
            echo '<h2>Achados e Perdidos</h2>';
            if (isset($_SESSION['Usuario']['id_cargo'])){ 
                if($_SESSION['Usuario']['id_cargo'] == '1'){      
                     echo "<button type=\"button\" onclick=\"location.href= '../achados_perdidos/adicionar.php'\">Adicionar</button>";
                     echo "<br><br>";       
                }
            }
            echo "<table border=\"1px\">";
            echo "<tr>";
            echo "<th>Item</th>";
            echo "<th>Local Encontrado</th>";
            echo "<th>Data</th>";
            if (isset($_SESSION['Usuario']['id_cargo'])){ 
                if($_SESSION['Usuario']['id_cargo'] == '1')  echo '<th>Opções</th>';            
            }
            echo "</tr>";
            $sql = "SELECT item,data,local_encontrado,id FROM achados_perdidos";
            if($result = $mysqli->query($sql)){
                while($row = $result->fetch_assoc()){
                    echo "<tr>";
                    echo "<td>". $row['item']."</td>";
                    echo "<td>". $row['local_encontrado']."</td>";
                    echo "<td>". $row['data']. "</td>";
                    if (isset($_SESSION['Usuario']['id_cargo'])){
                        if($_SESSION['Usuario']['id_cargo'] == '1'){
                            echo "<td>"; 
                            echo "<button type=\"button\" onclick=\"location.href='achados_perdidos/editar.php?id=". $row['id']."'\">Editar</button>";
                            echo "<button type=\"button\" onclick=\"location.href='achados_perdidos/excluir.php?id=". $row['id']."'\">Ex    cluir</button>";
                            echo "</td>";   
                        }
                    }
                }
            }  
            echo "</table>";   
        ?>  
        <?php
        echo "<br>";
        echo "<h2>Reuniões</h2>";
        if (isset($_SESSION['Usuario']['funcao'])){
            if ($_SESSION['Usuario']['funcao'] == '1' or $_SESSION['Usuario']['funcao'] == '2'){ 
                echo "<button type=\"button\" onclick=\"location.href= '../reuniao/adicionar.php'\">Cadastrar</button>";
                echo "<br><br>";             
            }
        }
        echo "<table border=\"1px\">";
        echo "<tr>";
        echo "<th>Data</th>";
        echo "<th>Hora</th>";
        echo "<th>Assunto</th>";
        if (isset($_SESSION['Usuario']['funcao'])){
            if ($_SESSION['Usuario']['funcao'] == '1' or $_SESSION['Usuario']['funcao'] == '2'){ 
                echo '<th>Opções</th>';
            }
        }
        echo "</tr>";
        $sql = "SELECT id,data,hora,assunto,id_condominos FROM reuniao";
        
        if($result = $mysqli->query($sql)){
            while($row = $result->fetch_assoc()){
                echo "<tr>";
                echo "<td>".$row['data']."</td>";
                echo "<td>".$row['hora']."</td>";
                echo "<td>".$row['assunto']."</td>";
                if (isset($_SESSION['Usuario']['funcao'])){
                    if ($_SESSION['Usuario']['funcao'] == '1' or $_SESSION['Usuario']['funcao'] == '2'){
                        echo "<td>";
                        echo "<button type=\"button\" onclick=\"location.href='reuniao/editar.php?id=". $row['id']."'\">Editar</button>";
                        echo "<button type=\"button\" onclick=\"location.href='reuniao/excluir.php?id=". $row['id']."'\">Excluir</button>";
                        echo "</td>";      
                    }
                }    
            }
        }
                echo '</table>';
            ?>
    </body>
</html>
