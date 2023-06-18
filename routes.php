<?php

// VERSÃO DEPLOY VERCEL

if(isset($_SERVER['REQUEST_URI'])) // verificar inicialização caminho do arquivo
{    
    // verificar se o arquivo existe
    if(@is_file("/var/task/user".$_SERVER['REQUEST_URI'].".php")) 
    {
        $urlLimpa = $_SERVER['REQUEST_URI'];
        $urlLimpa[0] = " ";
        require_once  $urlLimpa.".php";
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


