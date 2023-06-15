<?php

// VERSÃO DEPLOY VERCEL

if(isset($_SERVER['REQUEST_URI'])) // verificar inicialização caminho do arquivo
{
    $path = explode("/", $_SERVER['REQUEST_URI']);
    if($path[1]) // verificar se o nome do arquivo esta presente na url
    {
        $route = "";
        for($i = 1; $i < count($path); $i++)
        {
            $route .= $path[$i];
            if(file_exists($route.".php")) // verificar se o arquivo existe
            {
                require_once $route.".php";
                exit;
            }
            $route .= "/";
            echo "<h1>".$route."</h1>";
        }
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


