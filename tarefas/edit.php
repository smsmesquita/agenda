<?php
include('../conexao.php');
if($_POST){
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $servico = $_POST['servico'];
    $date = $_POST['date'];
    $time= $_POST['time'];
    $data_encerramento = $_POST['data_encerramento'];
    $sql = "UPDATE tarefas SET nome = '$nome', servico = '$servico', date = '$date', time = '$time', data_encerramento = '$data_encerramento' WHERE id= '$id'";
   
    $stmt = $conexao->prepare($sql);
    $stmt->execute();
    header("location: index.php");
}
?>

<html>
<head>
    <title>Alterar Tarefas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
<div class="container">

    <?php include '../menu.php';?>
<h1>Alterar Tarefas</h1>

<?php 
    $id = $_GET['id'];
    $sql = "SELECT * FROM tarefas where id=".$id;
    $result = $conexao->query($sql);
    $linha =$result->fetch(PDO::FETCH_ASSOC);
    ?>


<form method="post" action="edit.php">
<input type="hidden" name="id" value="<?php echo $linha["id"];?>" />
    <div class="mb-3">
        <label class="form-label">Digite o nome do Cliente</label>
        <input type="text" name="nome" value= '<?php echo $linha['nome']; ?>' placeholder="Digite o nome ou Cliente Novo" required class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">Digite o Serviço</label>
       <Textarea name='servico'  class="form-control"><?php echo $linha["servico"];?></Textarea> 
    </div>

    <div class="mb-3">
        <label class="form-label">Digite o Prazo</label>
        <input type="Date" name="date" value="<?php echo $linha["date"];?>" required class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">Digite a Hora do Chamado</label>
        <input type="datetime-local" name="time" value="<?php echo $linha["time"];?>" required class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">Digite a Data e Hora do Encerramento</label>
        <input type="datetime-local" name="data_encerramento" value="<?php echo $linha["data_encerramento"];?>" required class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Salvar</button>
</form>

</div>
</body>
</html>