<?php
?>
<div class="container">
    <div class="row">
        <p class="red" style="text-align: center;font-size:xx-large">метод array_udiff  </p>
        <div class="col-md-4" style="float: left">
            <p class="red">Это первы массив</p>
            <?php
            foreach($arrVegetablePadRight as $model){
                echo ($model->name . '</br>');

            }

            ?>

        </div>
        <div class="col-md-4" style="float: left">
            <p class="red">Это втрой массив  </p>
            <?php
            foreach($arrVegetable2 as $model){
                echo ($model->name . '</br>');
            }

            ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4" style="float: left">
            <p class="red">array_udiff вернет массив элементов, которые есть в первом массиве, но отсутствуют во втором . </p>
            <p class="green">использует collback функцию , в которой мы сами задаем условие равенства элементов</p>
            <?php
            foreach($arrayDiff as $model){
                echo ($model->name . '</br>');
            }

            ?>
        </div>
        <div class="col-md-4" style="float: left">
            <p class="red">array_udiff вернет массив элементов, которые есть во втором массиве, но отсутствуют в первом . </p>
            <p></br></p>
            <?php
            foreach($arrayDiff2 as $model){
                echo ($model->name . '</br>');
            }

            ?>
        </div>

    </div>
</div>