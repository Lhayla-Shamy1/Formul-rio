<?php

    $nome = addcslashes($_POST["nome"]);
    $email = addcslashes($_POST["email"]);
    $telefone = addcslashes($_POST["telefone"]);
    $message = addcslashes($_POST["message"]);

    $para = "lhaylashamy@acad.ifma.edu.br";
    $assunto = "Contato";
    $corpo ="Nome: ".$nome. "\n". "E-mail: ".$email."\n". "Telefone: ".$telefone."\n". "Mensagem: ".$message;

    $cabeca = "From : lhaylashamy8@gmail.com". "\n". "Reply-to: ".$email."\n". "X=Mailer: PHP/".phpversion();

    if(mail( $para,$assunto,$corpo,$cabeca )){
        echo("E-mail enviado com sucesso");
    }else{
        echo("Houve um erro");
    }





?>