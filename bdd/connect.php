<?php

try
{
    $BDD = new PDO (
        "mysql:host=localhost;dbname=id12733789_lepetitquiz;charset=utf8",
        "id12733789_root",
        "-~uxDKZAi%R8ahl2",
        array (PDo::ATTR_ERRMODE
        =>PDO:: ERRMODE_EXCEPTION));
}

catch (Exception $e)
{
    die ('Erreur fatale: ' .$e-> getMessage());
}

