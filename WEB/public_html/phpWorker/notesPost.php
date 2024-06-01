<li id="<?php echo $value['id'] ?>">
<div>
    <h3><?php echo $value['number'] ?><?php echo $value['title'] ?></h3>
    <p><?php echo $value['text'] ?></p>
</div>
<img class="image_cart" src="/img/<?php echo $value['img'] ?? '/img/u_default.jpg' ?>">
<div style="display: flex; flex-direction: column;">


    <form id="my_form">
            <?php
                if($value['value_data'] === '0') {
                    echo '<img id="I'.$value['id'].'"src="img/heart1.png" class="image" alt="'.$value['value_data'].'">';
                } else {
                    echo '<img id="I'.$value['id'].'"src="img/heart2.png" class="image" alt="'.$value['value_data'].'">';
                }
            ?>
        <br>
    </form>

</div>
</li>
