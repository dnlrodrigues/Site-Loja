<?php include("cabecalho.php");
      include("conecta.php");
      include("banco-produto.php");
      include("banco-categoria.php");
        
      $id = $_POST['id'];
    
      $categorias = listaCategorias ($conexao);    
?>  

<script>
    function nome(){
/*      document.getElementById('novoValor').disabled=false;
        document.getElementById('novoValor2').disabled=true;
        document.getElementById('opcaoNovaCategoria').disabled= true;
        document.getElementById('ehCombo').disabled=true; */
        
        document.getElementById('novoValor').style.display ='block';
        document.getElementById('novoValor2').style.display ='none';
        document.getElementById('opcao_NovaCategoria').style.display = 'none';
        document.getElementById('ehCombo').style.display = 'none';        
    }
    
    function preco(){
/*      document.getElementById('novoValor').disabled=true;
        document.getElementById('novoValor2').disabled=false;
        document.getElementById('opcao_NovaCategoria').disabled=true;
        document.getElementById('ehCombo').disabled=true; */
        
        document.getElementById('novoValor').style.display ='none';
        document.getElementById('novoValor2').style.display ='block';
        document.getElementById('opcao_NovaCategoria').style.display = 'none';
        document.getElementById('ehCombo').style.display = 'none';
        
    }
    
    function descricao(){
 /*     document.getElementById('novoValor').disabled=false;
        document.getElementById('novoValor2').disabled=true;
        document.getElementById('opcao_NovaCategoria').disabled= true;
        document.getElementById('ehCombo').disabled=true; */
        
        document.getElementById('novoValor').style.display ='block';
        document.getElementById('novoValor2').style.display ='none';
        document.getElementById('opcao_NovaCategoria').style.display = 'none';
        document.getElementById('ehCombo').style.display = 'none';
    }
    
    function categoria(){
/*      document.getElementById('novoValor').disabled=true;
        document.getElementById('novoValor2').disabled=true;
        document.getElementById('opcao_NovaCategoria').disabled=false;
        document.getElementById('ehCombo').disabled=true; */
        
        document.getElementById('novoValor').style.display ='none';
        document.getElementById('novoValor2').style.display ='none';
        document.getElementById('opcao_NovaCategoria').style.display = 'block';
        document.getElementById('ehCombo').style.display = 'none';
        
    }
    
    function combo(){
/*      document.getElementById('novoValor').disabled=true;
        document.getElementById('novoValor2').disabled=true;
        document.getElementById('opcao_NovaCategoria').disabled=true;
        document.getElementById('ehCombo').disabled=false; */
        
        document.getElementById('novoValor').style.display ='none';
        document.getElementById('novoValor2').style.display ='none';
        document.getElementById('opcao_NovaCategoria').style.display = 'none';
        document.getElementById('ehCombo').style.display = 'block';
    }
    
</script>

     <form action="alterarCampo-produtos.php" method="post">
        <h4>Selecione o campo a ser alterado:</h4>
        <div class="form formCampo">
            <div class="form-group altCampo">
                <input type="radio" name="campos" value="nomeNovo" onclick="nome()"> Nome
            </div>    
            <div class="form-group altCampo">
                <input type="radio" name="campos" value="precoNovo" onclick="preco()"> Preço
            </div>    
            <div class="form-group altCampo">
                <input type="radio" name="campos" value="descricaoNovo" onclick="descricao()"> Descrição
            </div>    
            <div class="form-group altCampo">
                <input type="radio" name="campos" value="id_categoriaNovo" onclick="categoria()"> Categoria
            </div>    
            <div class="form-group altCampo">
                <input type="radio" name="campos" value="comboNovo" onclick="combo()"> Combo
            </div>      
        </div>  
         
        <div>

            <input class="form-control campos" type="text" name="novoValor"  id="novoValor" style="display: none;">
            <input class="form-control campos" type="number" name="novoValorNumerico" id="novoValor2" style="display: none;"> 
            
            <select name="opcao_NovaCategoria" class="form-control campos" id="opcao_NovaCategoria" style="display: none;">
                <?php foreach($categorias as $categoria): ?>
                    <option value="<?=$categoria['id']?>"> 
                        <?=$categoria['nome']?> 
                    </option> 
                <?php endforeach ?>
            </select>
            
            <select name="ehCombo" class="form-control campos" id="ehCombo" style="display: none;">
                <option value="true">Sim</option>
                <option value="false">Não</option>
            </select>
            
        </div> 
        <br>
        <input type="hidden" name="id" value="<?=$id?>">
         <br>
        <button class="btn btn-primary">Alterar</button> 
      </form>      
<?php  
        
      

      include("rodape.php"); 
?>