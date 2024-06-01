<?php
/**
 * @var $DB
 * @var $DB2
 * @var $DB3
 */

require_once($_SERVER['DOCUMENT_ROOT'] . '/func/func.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/obj/DB.php');
$services = $DB->selectAll('services');
// $news = $DB2->selectAll('singles');
$users = $DB3->selectAll('users');
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
</head>
<body>

<?php include 'header.php'; ?>

<main>
    <div id="main">
        <div class="container">
            <h1>Блокнот по HTML и CSS</h1>
            <p>Изучайте HTML и CSS с нашими полезными материалами. Они покрывают 
                все основные аспекты данных языков. Мы позволяем не только изучать необходимый 
                материал, но и сохранять, фильтровать всё, что вам необходимо.</p>
            <button style="margin-bottom: 20px; background-color: aliceblue;"   id="redirectButton">Материал</button>
            <script>
                document.getElementById("redirectButton").addEventListener("click", function() {
                    window.location.href = "info.php";
                });
            </script>
        </div>
    </div>
    <div class="container" id="services">
        <h2>Возможности, которые предлагает наша платформа</h2>
        <p>Используя данный сайт,  вы сможите:</p>
        <ul>
            <?php foreach ($services as $service) { ?>
                <li>
                    <img src="<?php echo $service['url'] ?? '/img/u_default.jpg' ?>">
                    <div>
                        <h3><?php echo $service['name'] ?></h3>
                        <p><?php echo $service['description'] ?></p>
                    </div>
                </li>
            <?php } ?>
        </ul>
    </div>
    <div id="news">
        <div class="container">
            <h2>Последние изменения</h2>
            <ul>
                <!-- <?php foreach ($news as $newsIndex) { ?>
                    <li>
                        <div>
                            <span><?php echo $newsIndex['date'] ?></span>
                            <h3><?php echo $newsIndex['title'] ?></h3>
                            <?php echo $newsIndex['text'] ?>
                            <a class="button" href="./<?php echo $newsIndex['button'] ?? 'index.php' ?>">Подробнее</a>
                        </div>
                        <img src="<?php echo $newsIndex['img'] ?? 'img/n1.png' ?>" width="50%">

                    </li>
                <?php } ?> -->
            </ul>
        </div>
    </div>
    <div class="container" id="form">
        <h2>Служба поддержки</h2>
        <p>Отправьте письмо с интересующим вас вопросом и мы поможем:</p>

        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") 
                if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["message"])) {
                    $DB3->insertUser($_REQUEST['name'], $_REQUEST['email'], $_REQUEST['message']);
                }
        ?>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
           <input type="text" placeholder="Имя *" name="name" required>
            <input type="email" placeholder="Email *" name="email" required>
            <textarea class="form_massage" id="message" placeholder="Вопрос/проблема *" name="message" rows="4" required></textarea>
            <button type="send">Отправить</button>
        </form>
    </div>
</main>

<div id="contacts">
    <?php include 'footer.php'; ?>
</div>

</body>
</html>
