<?php
require_once "fonctions/fonctions.php";
session_start();
session_destroy();
redirect('index.php');