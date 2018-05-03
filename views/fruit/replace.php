<?php
?>
<div class="container">
    <div class="row">
        <p class="red" >метод array_replace </p>
        <div class="col-md-4" >
            <p class="red">Это один массив</p>

            <?php
            foreach($arrFruit as $model){
                echo ($model->name . '</br>');
            }

            ?>

        </div>
        <div class="col-md-4" >
            <p class="red">Это второй массив</p>
            <?php
            foreach($arrVegetable as $model){
                echo ($model->name . '</br>');
            }

            ?>

        </div>

        <div class="col-md-4" >
            <div>
                <p class="red">Это отработал array_replace c двумя массивами обьектов</p>
                <?php
                foreach($basket as $model){
                    echo ($model->name . '</br>');
                }

                ?>

            </div>
        </div>
    </div>
</div>