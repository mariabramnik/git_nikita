<?php
?>
<div class="container">
    <div class="row">
        <p class="red">метод array_push. Добавим в наш массив хотя бы еще 2 элемента(для одного этот метод слишком затратный) </p>
        <div class="col-md-4" style="float: left">
            <p class="red">Это наш массив до отработки метода </p>
            <?php
            foreach($ModelsVegetablesMapOld as $model){
                echo ($model->name . '</br>');

            }

            ?>

        </div>
        <div class="col-md-4" style="float: left">
            <p class="red">Это наш массив после отработки метода </p>
            <?php
            foreach($ModelsVegetablesMap as $model){
                echo ($model->name . '</br>');
            }

            ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <p class="red">С помощью метода array_diff посмотрим какие элементы второго массива отсутствуют в первом </p>
            <?php
            foreach($arrayNewDiff as $key => $value){
                echo ($value . '</br>');
            }

            ?>
        </div>

    </div>
</div>