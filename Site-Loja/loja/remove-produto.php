<?php include("cabecalho.php");
      include("conecta.php");
      include("banco-produto.php");
    
    $id = $_POST['id'];
    removeProduto($conexao, $id);
    header("Location: produto-lista.php?removido=true"); /*redirecionar para a página produto-lista após a execução*/
    die(); /*die serve para ele para de executar*/    
?>

<?php include("rodape.php")?>