

<?php
try
{
    $db = new PDO('mysql:host=localhost;dbname=pharmacyq1;charset=utf8', 'root', '');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $ex)
{
    echo ("Cannot connect to the database!");
    die();
}
?>