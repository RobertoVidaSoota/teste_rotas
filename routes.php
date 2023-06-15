<?php

// versão deploy vercel
if(isset($_SERVER['REQUEST_URI']))
{
    $path = explode("/", $_SERVER['REQUEST_URI']);
    if($path[1])
    {
        require_once $path[1].".php";
    }
    else
    {
        require_once "inicio.php";
    }
}
elseif(!$path[1])
{
    require_once "inicio.php";
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


