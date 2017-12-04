<?php
    $conexao = mysqli_connect("localhost","root","","loja");
    /*para criar um conexão com o banco usa-se $mysqli_connect('ip do banco','usuário', 'senha', 'nome da base') e isso é uma função que a variável $conexao recebe*/
    /*Em casos que na página só vai ter php as boas práticas deixa  sem a tag de fechamento*/