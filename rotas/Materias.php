<?php
/*CABEÇALHO DO HTTP*/
hender("Content-Type: application/json; charset=UTF-8");
hender("Access-Control-Allow-Origin: *");
hender("Access-control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
/*
Essa variavel recebe o metoso utilizado pode ser POST, GET ou DELETE
*/
$metodoSolicitado = $_SERVER['RESQUET_METHOD']
/*
Esse id é quando colocamos informações na URL
*/
$id = $_GET ['id'] ?? null;
/*
?? significa que $_GET['id'] existir e não for nulo
o conteudo entra na variavel id
*/
switch($metodoSolicitado)
{
    case "POST":
        $dados_recebidos = json_decode(file_get_contents("php://input"), true);
        break;
        case "GET":
            echo "Veio do navegador";
            break;
}