<?php
?>
<div class="container">
    <div class="row">
        <p class="red" style="text-align: center;font-size:xx-large">метод array_unique  </p>
        <div class="col-md-4" style="float: left">
            <p class="red">Это начальный массив</p>
            <?php
            foreach($arrFruit as $model){
                echo ($model->name . '</br>');

            }

            ?>

        </div>
        <div class="col-md-4" style="float: left">
            <p class="red">Это массив куда мы методом array_pad добавили одинаковые элементы  </p>
            <?php
            foreach($arrFruitNew as $model){
                echo ($model->name . '</br>');

            }

            ?>
        </div>
        <div class="col-md-4" style="float: left">
            <p class="red">Метод array_unique их убрал </p>
            <?php
              foreach ($arrFruitNewUnique as $key => $value){
                 echo($value . '</br>');
              }

            ?>
        </div>

    </div>
</div>