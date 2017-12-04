<?php include("cabecalho.php");
      include("conecta.php");
      include("banco-produto.php");   
       
     /*== serve validar sendo no caso de string ele converte ela para validar, caso não queira converter para validar deve se usar ===*/
        if(array_key_exists("removido", $_GET) && $_GET["removido"]=="true") { ?> 
            <p class="alert-success">Produto apagado com sucesso.</p>        
    <?php    
        }
    ?>

<?php  if(array_key_exists("alterado", $_GET) && $_GET["alterado"]=="true") { ?> 
            <p class="alert-success">Produto alterado com sucesso.</p>        
    <?php    
        }
    ?>


    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead>
                <tr class="tcabecalho">
                    <th colspan="6" class="tablehead">Lista</th>                
                </tr>
                <tr class="tcabecalho">
                    <th>Nome</th>
                    <th class="tablehead">Preço</th>
                    <th>Descrição</th>
                    <th class="tablehead">Categoria</th>
                    <th class="tablehead">Combo</th>
                    <th class="tablehead"></th>
                </tr>
            </thead>
            <tbody>
    <?php    $produtos = listaProdutos($conexao);

        foreach($produtos as $produto):
    ?>  
        <tr>
            <td> <?=$produto['nome']?> </td>    
            <td class="tablehead"> <?=$produto['preco']?> </td>
            <td> <?=substr($produto['descricao'],0 ,40) /*substr serve para reduzir o tamanho da string para na visualização sendo o primeiro parâmetro a string do texto, o segundo onde vai iniciar a visualização, ou seja, em que caracter vai iniciar a visualização e o terceiro parâmetro é o onde vai terminar a visualização */ ?> </td> 
            <td class="tablehead"><?=$produto['nome_categoria']?></td>
            <td class="tablehead">
                <?php 
                    if ($produto['combo']){
                        echo 'Sim';
                    } else{
                        echo 'Não';
                    }
                ?>
            </td>
            <td>
                <div class="form">
                    <div class="form form-group">
                        <form action="confirmaAltTudo.php" method="post">
                            <input type="hidden" name="id" value=" <?=$produto['id']?>">
                            <button class="btn btn-default"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Alterar </button>
                        </form>
                    </div> 
                     <div class="form form-group">
                        <form action="remove-produto.php" method="post">
                            <input type="hidden" name="id" value="<?=$produto['id']?>">
                            <button class="btn btn-danger"> <i class="fa fa-trash-o" aria-hidden="true"></i> Delete </button>    
                        </form>
                    </div>
                </div>    
            </td>
        </tr>                         
    <?php 
        endforeach /*no lugar das {} pode ser colocado : após a instrução e no final endforeach*/
    ?>
            </tbody>        
        </table>  
    </div>    
<?php include("rodape.php")?>