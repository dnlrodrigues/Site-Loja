<?php include("cabecalho.php");
      include("conecta.php");
      include("banco-categoria.php");

$categorias = listaCategorias($conexao);

?>
    <h1>Formulário de Produto</h1>
        <form action="adiciona-produto.php" method="post">
            <table class="table">
                <tr>
                    <td> Nome: </td>
                    <td>
                        <input class="form-control" type="text" name="nome" autofocus> 
                    </td>
                </tr>    
                <tr>
                    <td> Preco: </td>
                    <td>
                        <input class="form-control" type="number" name="preco"> <br/>
                    </td>    
                </tr>
                <tr>
                    <td> Descrição </td>
                    <td>
                        <textarea class="form-control" name = "descricao"></textarea>
                    </td>
                </tr>
                <tr>
                    <td>Categoria</td>
                    <td>
                        <select name="id_categoria" class="form-control">
                            <?php foreach($categorias as $categoria): ?>
                                <option value="<?=$categoria['id']?>"> 
                                    <?=$categoria['nome']?> 
                                </option> 
                            <?php endforeach ?>
                        </select>    
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td> 
                        <input type="checkbox" name="combo" value="true"> Combo
                    </td>
                </tr>
                <tr>
                    <td>
                        <button class="btn btn-primary"> Cadastrar </button>
                    </td>    
                </tr>    
            </table>    
        </form>
<?php include("rodape.php")?>