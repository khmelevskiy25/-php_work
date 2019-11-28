<?php
require_once 'classes.php';
$user = 'root';
$pass = '';
try
{
    $db = new PDO('mysql:host=127.0.0.1;dbname=publication', $user, $pass);
}catch (PDOException $error)
{
    print "Error!: " . $error->getMessage() . "<br/>";
    die();
}
$query = ("SELECT * FROM `post`");
$result = $db->query($query);

$publication = array();

while($row = $result->fetch(PDO::FETCH_ASSOC))
{
    // create an instance of the class $publication[] = new $row['type']
    // string ($row) after string ['type'] for constructors
    $publication[] = new $row['type']($row);
}