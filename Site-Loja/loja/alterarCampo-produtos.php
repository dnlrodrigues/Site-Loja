<?php include("conecta.php");
      include("banco-produto.php"); 
      include("banco-categoria.php"); 

    $id = $_POST['id'];  
    $campos = $_POST['campos'];
    $novoValor = $_POST['novoValor'];
 /*   var_dump($_POST);*/
    
    switch($campos){
        case ("nomeNovo"):
            $values = "nome";
            break;
            
        case ("precoNovo"):
            $values = "preco"; 
            $novoValor = $_POST['novoValorNumerico'];
            break;
        
        case ("descricaoNovo"):
            $values = "descricao";
            break;
        
        case ("id_categoriaNovo"):
            $values = "id_categoria";
            $novoValor =  $_POST['opcao_NovaCategoria'];
            break;
        
        case ("comboNovo"):
            $values = "combo"; 
            $novoValor = $_POST['ehCombo'];
            break;
    }

 alteraCampos($conexao, $id, $values, $novoValor);
 header("Location: produto-lista.php?alterado=true");
 die();
 