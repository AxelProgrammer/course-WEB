<?php
 if ($_SERVER["REQUEST_METHOD"] == "POST") 
    if (isset($_POST["name"]) && isset($_POST["phone"])) 
        $DB3->insertUser($_REQUEST['name'], $_REQUEST['phone']);
?>