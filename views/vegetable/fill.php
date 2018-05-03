<?php
?>
<div class="container">
    <p class="red"> </p>
    <div class="row">
        <div class="col-md-4" style="float: left">
            <p class="green">Используем метод fill и  Заполним массив начиная с пятого э-та, 20 раз , элементом "redish"</p>
            <p></br></p>
            <?php
            foreach($arrNew as $key => $value){
                echo ($key . ' => ' . $value . '</br>');
            }

            ?>

        </div>
        <div class="col-md-4" style="float: left">
            <p class="green">Используем метод array_keys и вернем массив содержащий все ключи в качестве значений</p>
            <p></br></p>
            <?php
            foreach($arrKeys as $key => $value){
                echo ($key . ' => ' . $value . '</br>');
            }

            ?>

        </div>
        <div class="col-md-4" style="float: left">
            <p class="green">Используем метод array_values и вернем массив содержащий все значения из начального массива , заново проиндексированный</p>
            <?php
            foreach($arrValues as $key => $value){
                echo ($key . ' => ' . $value . '</br>');
            }

            ?>

        </div>

    </div>
</div>