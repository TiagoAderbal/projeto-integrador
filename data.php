<?php
    $dbHost = 'https://github.com/TiagoAderbal/projeto-integrador';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'cadastro';

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    if(isset($_POST['enviar'])){
        // print_r($_POST['nome']);
        // print_r('<br>');
        // print_r($_POST['email']);
        // print_r('<br>');
        // print_r($_POST['tel']);
        // print_r('<br>');
        // print_r($_POST['datanasc']);
        // print_r('<br>');
        // print_r($_POST['endereco']);
        // print_r('<br>');
        // print_r($_POST['mensagem']);

        include_once('data.php');

        $nome= $_POST['nome'];
        $email= $_POST['email'];
        $tel= $_POST['tel'];
        $datanasc= $_POST['datanasc'];
        $endereco= $_POST['endereco'];
        $mensagem= $_POST['mensagem'];

        $result= mysqli_query($conexao, "INSERT INTO projeto(nome, email, tel, datanasc, endereco, mensagem) 
        VALUES ('$nome', '$email', '$tel', '$datanasc', '$endereco', '$mensagem')");

        echo "Dados salvos com sucesso";
    }

    // if($conexao->connect_errno){
    //     echo "ERRO";
    // }

    // else{
    //     echo "Conexão efetuada";
    // }
?>