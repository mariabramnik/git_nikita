<?php
?>
<div class="container">
    <div class="row">
        <p class="red" >метод array_combine  </p>
        <div class="col-md-4" >
            <p class="red">Это один массив</p>

            <?php
            foreach($arrFruit as $key => $model){
                Echo $key. '=> ';
                echo ($model->id . '  ' . $model->name . '</br>');
            }
            ?>

        </div>
        <div class="col-md-4" >
            <p class="red">Это второй массив</p>
            <?php
            foreach($arrVegetableSmall as $key => $model){
                Echo $key. '=> ';
                echo ($model->id . '  ' . $model->name . '</br>');
            }
            ?>

        </div>

            <div class="col-md-4" >
                <div>
                    <p class="red">Это отработал array_combine c двумя массивами обьектов</p>
                    <?php
                    foreach($arrCombineObj  as $key => $value){
                        echo $key . '=> ' . $value . '</br>';

                    }

                    ?>
                </div>
            <div>
                <p class="red">Это отработал array_reverse</p>
                <?php
                foreach($arrReverse as $key => $value){
                    echo $key . '=> ' . $value . '</br>';

                }

                ?>
            </div>
        </div>
    </div>
</div>