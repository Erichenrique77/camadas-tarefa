<?php
$NOME = $_REQUEST['NOME'];
$BEBIDA = $_REQUEST['BEBIDA'];
$NASCIMENTO = $_REQUEST['NASCIMENTO'];

$dataAtual = date('Y');
$NASCIMENTO = date($NASCIMENTO, 'Y');

$idade = $dataAtual - $NASCIMENTO;



if ($idade<18){
    $dados = array(
        "tipo" => "menor.jpg",
        "mensagem" => "Você é menor de idade!"
    );
} else {

    switch($BEBIDA){
        case '1' : $dados = array(
            "tipo" => "suco.jpg",
            "mensagem" => "Seja bem-vindo, $NOME, sabemos que prefere sucos!"
        );
        break;

        case '2' : $dados = array(
            "tipo" => "alcool.jpg",
            "mensagem" => "Seja bem-vindo, $NOME, sabemos que Prefere Bebidas alcoólicas!"
        );
        break;

        case '3' : $dados = array(
            "tipo" => "refrigerante.jpg",
            "mensagem" => "Seja bem-vindo, $NOME , sabemos que Prefere Refrigerantes!"
        );
        break;
    }
}

echo json_encode($dados);