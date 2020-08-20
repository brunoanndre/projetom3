<!DOCTYPE html>
<?php include ('config.php');?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Condominio Sol Nascente</title>
    
    </head>
    <body>
    <center><h1>Condomínio Sol Nascente</h1></center>
    
        <h2>Salão de Festas</h2>
        <button type="button" onclick="salao_festas/adicionar.php">Solicitar reserva</button>
        <br><br>
        <table border="1px">
            <tr>
                <th>Nome</th>
                <th>Data</th>
                <th>Horário</th>
                <th>Opções</th>
            </tr>
            <td>Nome</td>
            <td>Data</td>
            <td>Hora</td>
            <td>
            <button type="button" onclick="salao_festas/editar.php">Editar reserva</button>
            <button type="button" onclick="salao_festas/excluir.php">Excluir reserva</button>
            </td>
       
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
        
        <h2>Achados e Perdidos</h2>
        <button type="button" onclick="achados_perdidos/adicionar.php">Adicionar</button>
        <br><br>
        <table border="1px">
            <tr>
                <th>Item</th>
                <th>Local Encontrado</th>
                <th>Data</th>
                <th>Opções</th>
            </tr>
            <td>Item</td>
            <td>Local</td>
            <td>Data</td>
            <td>             
                <button type="button" onclick="achados_perdidos/editar.php">Editar</button>
                <button type="button" onclick="achados_perdidos/excluir.php">Excluir</button>
            </td>
        </table>     
        
        <br>
        <h2>Reuniões</h2>
        <button type="button" onclick="reuniao/adicionar.php">Agendar</button>
        <br><br>
        <table border="1px">
            <tr>
                <th>Data</th>
                <th>Hora</th>
                <th>Assunto</th>
            </tr>
            <td>Data</td>
            <td>Hora</td>
            <td>Assunto</td>
            <td>
            <button type="button" onclick="reuniao/editar.php">Editar</button>
            <button type="button" onclick="reuniao/excluir.php">Excluir</button>    
            </td>
        </table>
        <?php
        // put your code here
        ?>
    </body>
</html>
