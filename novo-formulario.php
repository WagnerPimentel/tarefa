<?php include "cabecalho.php"?>

<h2>Cadastrar nova tarefa</h2>
<form method="post" action="novo-salvar.php">
    <label for="titulo">Título</label>
    <input type="text" name="titulo" id="titulo" required maxlength="100"> 
    <!-- required(torna o campo obrigatorio) -->
    <!-- maxlength limita o tamanho do texto dentro do campo -->
    <label for="descricao">Descrição</label>
    <textarea name="descricao" id="descricao"></textarea>
    <button type="submit" class="btn btn-success">salvar nova tarefa</button>
</form>
<?php include "rodape.php";?>
