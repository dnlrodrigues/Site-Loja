<?php include("cabecalho.php");
      include("conecta.php");
      include("banco-produto.php"); 
      include("banco-categoria.php");
        //Comentários:
        /*tag do PHP dentro do HTML <? código ?>
          variáveis vem com cifrão e não é necessário declarar o tipo. Ex: $nome
          imprimir um dado usa o comando echo: ex: echo $curso;
          if {..} else {...}
          for ($i=0; $i <5; $i++){echo "Laço de número: " . $i;}
          o ponto serve para concatenar palavras
          while ($i <$condicao) {echo "Laço de números: ". $i; $i++;}
          array ex: $numeros = array(1,3,9,4,5);
          ex: for ($i=0; $i < 10; $i++) { echo "Chave: ". $i . "Valor: ". $numeros[$i]}
          ex: $arrayMaluco = array(0, 1, "banana", "alura", 4, 5, "curso php", 7, 8, 9);
          function ex:
          function mostraConteudoDoArray($array){ for ($i=0; $i < sizeof($array); $i++){echo "Chave: " . $i . "Valor: " . $array[$i]; }}
          mostraConteudodoArray($arrayMaluco);
          function somaDoisNumeros($n1, $n2){ $soma =$n1 + $n2; return $soma}
          $resultado = somaDoisNumeros($a, $b); echo $resultado;
          
          */    
     $nome = $_POST['nome'];
     $preco = $_POST['preco'];
     $descricao = $_POST['descricao'];
     $categoria_id = $_POST['id_categoria'];
     if (array_key_exists('combo', $_POST)){
        $combo = "true";    
     } else {
         $combo = "false";/*na converção o false é uma string vazia por isso para passar o parametro false deve ser colocado entre aspas assim como o true para passar o true deve se colocar as aspas*/
     }
     
     
        
    if(insereProduto($conexao, $nome, $preco, $descricao, $categoria_id, $combo)){            
 ?>
            <p class="text-success">Produto <?= $nome; ?>, <?= $preco;?> adicionado com sucesso!</p>
 <?php } 
        else { 
            $msg = mysqli_error($conexao);
?> 
            <p class="text-danger">Produto <?= $nome; ?> não pode ser adicionado! Erro: <?= $msg?></p>
<?php    
        }             
        
?>
    
<?php include("rodape.php")?>

