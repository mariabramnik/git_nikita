<?php
?>
<div class="container">
    <div class="row">
        <p class="green">метод array_flip.В значениях изменяемого массива должны лежать либо тип integer  либо string,</p>
        <p class="green">    иначе flip не сможет их перевернуть и сделать ключами нового массива</p>
        <div class="col-md-4" style="float: left">
            <p class="red">Это наш массив до отработки методом array_flip </p>
                <?php
                    foreach($arrNames as $key => $value){
                    echo ($value . '</br>');
                    }

                ?>

        </div>
        <div class="col-md-4" style="float: left">
            <p class="red">Это наш массив после отработки методом array_flip </p>
            <?php
                foreach($arrFlipped as $key => $value){
                echo ($value . '</br>');
                }

            ?>
        </div>
    </div>
    <p class="red">Все ключи старого массива стали значениями нового </p>
        <div class="row">
            <div>
                <p class="red">Метод array_rand вернет нам ключи случайно выбранных из массива значений. Например трех</p>
                <?php
                    foreach($arrRand as $key => $value){
                    echo ($key . ' => ' . $value . '</br>');
                        }

                ?>
        </div>
    </div>
</div>