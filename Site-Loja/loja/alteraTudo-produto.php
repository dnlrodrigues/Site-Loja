<?php include("cabecalho.php");
      include("conecta.php");
      include("banco-categoria.php");
      include("banco-produto.php");  

$id = $_POST['id'];
$categorias = listaCategorias($conexao);
$produto = buscaProduto($conexao, $id);
$combo = $produto['combo'] ?  "checked = 'checked'" : "";

?>
<form action="alteraTudo.php" method="post">
    <h1>Alterar Produto</h1>
        <form action="adiciona-produto.php" method="post">
            <input type="hidden" name="id" value="<?=$produto['id']?>">
            <table class="table">
                <tr>
                    <td> Nome: </td>
                    <td>
                        <input class="form-control" type="text" name="nome" value=" <?=$produto['nome']?> "> 
                    </td>
                </tr>    
                <tr>
                    <td> Preco: </td>
                    <td>
                        <input class="form-control" type="number" name="preco" value="<?=$produto['preco']?>">
                    </td>    
                </tr>
                <tr>
                    <td> Descrição </td>
                    <td>
                        <textarea class="form-control" name = "descricao"><?=$produto['descricao']?></textarea>
                    </td>
                </tr>
                <tr>
                    <td>Categoria</td>
                    <td>
                        <select name="id_categoria" class="form-control">
                            <?php foreach($categorias as $categoria): 
                                $essaEhACategoria = $produto['id_categoria'] == $categoria['id'];
                                $selecao = $essaEhACategoria ? "selected = 'selected'" : "";
                            ?>
                                <option value="<?=$categoria['id']?>" <?=$selecao?> >
                                    <?=$categoria['nome']?> 
                                </option> 
                            <?php endforeach ?>
                        </select>    
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td> 
                        <input type="checkbox" name="combo" <?=$combo?> value="true"> Combo
                    </td>
                </tr>
                <tr>
                    <td>
                        <button class="btn btn-primary"> Alterar </button>
                    </td>    
                </tr>    
            </table>    
        </form>
</form>        

<?php include("rodape.php")?>