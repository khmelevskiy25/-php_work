<?php
require_once 'connect.php';
require_once 'function.php';

if(!empty($_POST))
{
    sleep(1);
    save_mess(); 
    header("Location: /"); 
    die(); 
}

$messages = get_mess(); 