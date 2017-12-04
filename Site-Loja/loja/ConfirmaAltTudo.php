<?php include("cabecalho.php");
          
      $id = $_POST['id'];
?>
    <div class="form">
        <h3>Selecione a opção desejada</h3>
        <div class="form form-group">
            <form action="altera-produto.php" method="post">
                <input type="hidden" name="id" value=" <?=$id?>">
                    <button class="btn btn-default"> Alterar campo específico </button>
            </form>
        </div> 
        <div class="form form-group">
            <form action="alteraTudo-produto.php" method="post">
                <input type="hidden" name="id" value="<?=$id?>">
                    <button class="btn btn-default"> Alterar todos os campos </button>    
            </form>
        </div>
    </div>    
      
<?php  
    include("rodape.php"); 
?>      