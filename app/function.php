<?php
require_once 'connect.php';
require_once 'handler.php';

function clear()
{
    global $db;
    foreach($_POST as $key => $value)
    {
        $_POST[$key] = mysqli_real_escape_string($db, $value);
    }

}

function save_mess()
{
    global $db;
    clear();
    extract($_POST);
    $query = "INSERT INTO `comment_user` (name, text) VALUES ('$name', '$text')";
    mysqli_query($db,$query);
}

function get_mess()
{
    global $db;
    $query = "SELECT * FROM `comment_user` ORDER BY `id` DESC";
    $res = mysqli_query($db, $query);
    return mysqli_fetch_all($res, MYSQLI_ASSOC);
}