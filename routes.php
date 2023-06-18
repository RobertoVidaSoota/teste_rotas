<?php

// VERSÃO DEPLOY VERCEL

if(isset($_SERVER['REQUEST_URI'])) // verificar inicialização caminho do arquivo
{
    $path = explode("/", $_SERVER['REQUEST_URI']);
    if($path[1]) // verificar se o nome do arquivo esta presente na url
    {
        echo $_SERVER['REQUEST_URI'];
        // if(@is_file("/var/task/user/".explode("/", $_SERVER['REQUEST_URI']).".php")) // verificar se o arquivo existe
        // {
        //     require_once explode("/", $_SERVER['REQUEST_URI']).".php";
        //     exit;
        // }
        // require_once "404.php";
        // exit;
    }
    else
    {
        require_once "inicio.php";
    }
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


