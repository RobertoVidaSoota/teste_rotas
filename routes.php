<?php


if(isset($_GET["url"]))
{
    require_once $_GET["url"].".php";
}
else
{
    require_once "inicio.php";
    exit;
}


