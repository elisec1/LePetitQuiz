<?php
function EstConnecte() 
{
    return isset($_SESSION['login']);
}

function AdminConnecte() 
{
    return isset($_SESSION['login_admin']);
}