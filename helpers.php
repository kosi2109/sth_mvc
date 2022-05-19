<?php
declare (strict_types = 1);

function dd($something){
    var_dump($something);
    die();
} 

function view(string $html){
    $path = __DIR__ . "/views/$html.php";
    require_once $path;
}

function request(){
    $method = $_SERVER["REQUEST_METHOD"];
    if($method == "GET" && count($_GET) > 0){
        return $_GET;
    }elseif($method == "POST" && count($_POST) > 0){
        return $_POST;
    }else{
        return;
    }
}

function uriParser(string $uri){
    return parse_url(trim($uri,'/'),PHP_URL_PATH);
}