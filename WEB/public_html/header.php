<header>
    <div class="container">
        <a id="logo" href="index.php">
            <img src="img/logo1.png">
        </a>
        <form onsubmit="return false;">
            <select id="links" name="links">
            <?php
                $pageName = $_SERVER['REQUEST_URI']; 
                $selectOptions = '';
                if ($pageName === "/index.php") {
                    $selectOptions .= '<option value="main">важное</option>';
                    $selectOptions .= '<option value="services">возможности</option>';
                    $selectOptions .= '<option value="news">новости</option>';
                    $selectOptions .= '<option value="form">поддержка</option>';
                    $selectOptions .= '<option value="contacts">контакты</option>';
                } elseif ($valeus !== '0') {          
                    foreach ($values as $value) 
                        $selectOptions .= '<option value="'.$value['id'].'">'.$value['title'].'</option>';
                } else {
                    $selectOptions .= '<option value="0">Default Option</option>';
                }

                echo $selectOptions; 
            ?>
            </select><br><br>
            <button type="submit" onclick="goToLink()"></button>
        </form>
        <script>
            function goToLink() {
                var selectedLink = document.getElementById("links").value;
                var targetElement = document.getElementById(selectedLink);
                if (targetElement) {
                    targetElement.scrollIntoView({ behavior: 'smooth' });
                }
            }
        </script>
        <a class="icon" href="lake_info.php">
            <img src="img/notepad2.png">
        </a>
        <a class="icon" href="info.php">
            <img src="img/notepad_main.png">
        </a>
    </div>
</header>