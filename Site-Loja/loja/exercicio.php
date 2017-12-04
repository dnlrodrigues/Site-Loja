<?php include("cabecalho.php")?>
    <?php
            $array1 = array(1,5,6,9,8);
            $array2 = array(4,0,8,7,3);

            $soma1 = somaArray ($array1);
            $soma2 = somaArray ($array2);
            $somaTotal = $soma1 + $soma2;
            echo "Resultado Total da soma dos Arryas " . $somaTotal; 

            function somaArray ($arrays){
                $soma = 0;
                for ($i=0; $i < sizeof($arrays); $i++){
                    $soma = $soma + $arrays[$i];
                }
                return $soma;
            }  
        ?> 

        <?php
            $total = 20 + 45 / 2;
            echo $total;
        ?>
<?php include("rodape.php")?>        
        