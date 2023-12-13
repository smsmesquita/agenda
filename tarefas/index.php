<?php include('../conexao.php'); ?>
<html>
<head>
    <title>Listar Tarefas</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
<div class="container">
    <?php include '../menu.php';?>
    <h1>Listar Tarefas <a href="add.php">+</a></h1>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Servico</th>
            <th scope="col">Prazo</th>
            <th scope="col">Hora do Chamado</th>
            <th scope="col">Data do Encerramento</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $consulta = $conexao->query("SELECT id, nome, servico,  DATE_FORMAT(date, '%d/%m/%Y') AS prazo, DATE_FORMAT(time, '%d/%m/%Y %H:%i:%s') AS hora_chamado, DATE_FORMAT(data_encerramento, '%d/%m/%Y %H:%i:%s') AS data_encerramento FROM `tarefas`");
        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)){
            ?>
            <tr>
                <th scope="row"><?php echo $linha["id"]?></th>
                <td><?php echo $linha["nome"]?></td>
                <td><?php echo $linha["servico"]?></td>
                <td><?php echo $linha["prazo"]?></td>
                <td><?php echo $linha["hora_chamado"]?></td>
                <td><?php 
                if ($linha["data_encerramento"]!= '00/00/0000 00:00:00'){
                    echo $linha["data_encerramento"];
                }
                ?></td>

                <td>
                    <a href="delete.php?id=<?php echo $linha["id"]?>" onclick="return confirm('Deseja realmente excluir?')"><button type="button" class="btn btn-danger">Excluir</button></a>
                    <a href="edit.php?id=<?php echo $linha["id"]?>"> <button type="button" class="btn btn-dark">Editar</button></a>
                </td>
            </tr>
         
        <?php }?>
        </tbody>
    </table>
</div>

</body>
</html>