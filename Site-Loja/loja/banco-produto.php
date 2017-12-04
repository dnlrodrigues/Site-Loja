<?php  
    function listaProdutos($conexao){
        $produtos = array();
        $resultado = mysqli_query($conexao, "select p.*, c.nome as nome_categoria from produtos p join categoria c on p.id_categoria = c.id ");
        
        while($produto = mysqli_fetch_assoc($resultado)){
        /*o fetch serve para fazer um loop do produto associado
          array_push serve para inserir os produtos dentro do array
          o primeiro parametro é o array e o segundo é o item a ser inserido no array*/
             array_push($produtos, $produto);
        }
        
        return $produtos;
    }

    function insereProduto($conexao, $nome, $preco, $descricao, $categoria_id, $combo){
            $query="insert into produtos (nome, preco, descricao, id_categoria, combo) values ('{$nome}',{$preco}, '{$descricao}', '{$categoria_id}', {$combo})"; /*passando as variáveis para o banco como uma string por isso o nome está isolado por aspas simpels*/
            /*echo $query;  isso serve para inprimir a query que está inserindo os produtos, ou seja, desde o insert até os valores*/
            return mysqli_query($conexao, $query); /*executando a query sendo chamada a função mysqli_query(nome da variavel da conexao, nome da query)*/ 
    }

    function removeProduto($conexao, $id){
        $query = "delete from produtos where id = {$id}";
        return mysqli_query($conexao, $query);
    }

    function alteraCampos($conexao, $id, $coluna, $novoValor){
            
        if ($coluna == 'combo'){
            $query = "update produtos set {$coluna} = {$novoValor} where id = {$id} ";
        } else {
            $query = "update produtos set {$coluna} = '{$novoValor}' where id = {$id} ";
        }
        
        return mysqli_query($conexao, $query);
    }
    
    function buscaProduto($conexao, $id){
        $query = "select * from produtos where id= {$id}";
        $resultado = mysqli_query($conexao, $query);
        return mysqli_fetch_assoc($resultado);
    }

    function alteraProduto($conexao, $id, $nome, $preco, $descricao, $id_categoria, $combo){
        $query = "update produtos set nome = '{$nome}', preco = {$preco}, descricao = '{$descricao}', id_categoria = '{$id_categoria}', combo = {$combo} where id = {$id}";
        return mysqli_query($conexao, $query);
    }
    