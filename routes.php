<?php

// VERSÃO DEPLOY VERCEL

if(isset($_SERVER['REQUEST_URI'])) // verificar inicialização caminho do arquivo
{
    // limpando url para o tratamento
    $urlAntiga = $_SERVER['REQUEST_URI'];
    $tamanhoUrl = strlen($urlAntiga);
    $novaUrl = "";
    for($i = 0; $i < $tamanhoUrl; $i++)
    {
        if($i > 0)
        {
            $novaUrl .= $urlAntiga[$i];
        }
    }  
    // verificar se o arquivo existe
    if(@is_file("/var/task/user".$_SERVER['REQUEST_URI'].".php")) 
    {
        require_once  $novaUrl.".php";
        exit;
    }
    // url estando vazia sera carregada o inicio.php
    echo "<h2> url: $novaUrl</h2>";
    if($novaUrl === "")
    {
        require_once "inicio.php";
        exit;
    }
    require_once "404.php";
    exit;
}
else
{
    require_once "inicio.php";
    exit;
}



//versão localhost
// if(isset($_GET["url"]))
// {
//     require_once $_GET["url"].".php";
// }
// else
// {
//     require_once "inicio.php";
//     exit;
// }


