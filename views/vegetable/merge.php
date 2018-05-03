<?php
?>
<div class="container">
    <div class="row">
        <p class="red">метод array_merge </p>
        <div class="col-md-4" style="float: left">
            <p class="red">Это массив овощей </p>
            <?php
            foreach($arrVegetable as $model){
                echo ($model->name . '</br>');

            }

            ?>

        </div>
        <div class="col-md-4" style="float: left">
            <p class="red">Это массив фруктов </p>
            <?php
            foreach($arrFruit as $model){
                echo ($model->name . '</br>');
            }

            ?>
        </div>
        <div class="col-md-4" style="float: left">
            <div>
            <p class="red">Это обединенный массив после отработки метода array_merge </p>
            <?php
            foreach($arrCombined as $model){
                echo ($model->name . '</br>');
            }

            ?>
            </div>

        </div>
    </div>
</div>