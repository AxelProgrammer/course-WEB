<?php
/**
 * @var $DBVALUE
 */

require_once($_SERVER['DOCUMENT_ROOT'] . '/func/func.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/obj/bdValue.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/obj/save_data.php');

$values = array();
$rows = $DBVALUE->selectAll('value');
foreach ($rows as $value) 
    if ($value['value_data'] == 1) 
        array_push($values, $value);
?>
<!DOCTYPE HTML>
<html lang="ru">
<head>
    <title>Notepad</title>
    <meta name="description" content="Группа КС-20, главная страница">
    <meta charset="utf-8">
    <link href="img/logo1_1.png" rel="shortcut icon">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/lapto_style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/script_lake.js"></script>
</head>
<body>
  
<?php include 'header.php'; ?>

<main>
    <div id="main">
        <div class="container">
            <h1>Блокнот по HTML и CSS</h1>
            <p>Данный материал поможет вам в начале пути изучения HTML</p>
        </div>
    </div>
    <div class="container" id="value">
        <h2>Избранное:</h2>
        <ul>
            <?php 
            $per = 0;
            foreach ($rows as $value) { 
                 if ($value['value_data'] == 1) { 
                     include 'phpWorker/notesPost.php'; 
                     $per++;
                 } 
            } 
            if ($per == 0) echo '<h2 style="font-size:200%">Вы пока ничего не добавили:</h2>';
            ?>
        </ul>
    </div>
</main>

<div id="contacts">
    <?php include 'footer.php'; ?>
</div>
</body>
</html>
