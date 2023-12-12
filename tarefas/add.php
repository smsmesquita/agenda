<?php
include('../conexao.php');
if($_POST){
    $nome = $_POST['nome'];
    $servico = $_POST['servico'];
    $date = $_POST['date'];
    $time= $_POST['time'];
    $sql = "insert into tarefas  (nome,servico,date,time) values ('$nome','$servico','$date','$time')";
   
    $stmt = $conexao->prepare($sql);
    $stmt->execute();
    header("location: index.php");
}
?>

<html>
<head>
    <title>Cadastro de Tarefas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
<div class="container">
    <?php include '../menu.php';?>
<h1>Cadastro de Tarefas</h1>

<form method="post" action="add.php">
    <div class="mb-3">
        <label class="form-label">Digite o nome do Cliente</label>
        <input type="text" name="nome" placeholder="Digite o nome ou Cliente Novo" required class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">Digite o Serviço</label>
       <Textarea name='servico' class="form-control"></Textarea> 
    </div>

    <div class="mb-3">
        <label class="form-label">Digite o Prazo</label>
        <input type="Date" name="date" required class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">Digite a Hora do Chamado</label>
        <input type="datetime-local" name="time" required class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Salvar</button>
</form>

</div>
</body>
</html>