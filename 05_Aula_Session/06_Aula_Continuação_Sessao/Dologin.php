<?php
    //Conexão
    include('../conexao/conexao.php');

    //Recuperando valores
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    //Query do sql
    $sql = "SELECT * FROM login WHERE login='$login' AND senha='$senha' ";

    // Executando a query
    $cmd = mysqli_query($con,$sql);

        //Verificando se a senha e o login existe
    if(mysqli_num_rows($cmd)==0)
    {
        //Se total de linhas for 0, logo o usuário não existe
        header("Location: login.php");
    }

    else
    {
//Criando sessao
        session_start();
        $_SESSION['login'] = $login;
        header("Location: ");

    }

    ?>