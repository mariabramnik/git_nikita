<?php
?>
<div class="container">
    <p class="red">    callback функция должна принимать параметр по ссылке!!! </p>
    <div class="row">
        <p class="green">метод array_walk</p>
        <p class="green">    callback функция применяется к каждому из элементов массива. </p>
        <div class="col-md-4" style="float: left">
            <p class="red">Это наш массив до отработки методом array_walk </p>
            <?php
            foreach($arrOld as $key => $value){
                echo ($value . '</br>');
            }

            ?>

        </div>
        <div class="col-md-4" style="float: left">
            <p class="red">В нашем случае она переведет все значения в верхний регистр </p>
            <?php
            foreach($arrNames as $key => $value){
                echo ($value . '</br>');
            }

            ?>
        </div>
    </div>
    <div class="row">
        <p class="green">метод array_walk</p>
        <p class="green">    callback функция применяется к каждому из обьектов массива. </p>
        <div class="col-md-4" style="float: left">
            <p class="red">Это наш массив до отработки методом array_walk </p>
            <?php
            foreach($arrOldObj as $key => $massiv){
                      echo $massiv->name . '</br>';
                    }
            ?>
        </div>
        <div class="col-md-4" style="float: left">
            <p class="red">В нашем случае она переведет все значения в верхний регистр </p>
            <?php
            foreach($ModelsVegetablesMap as $key => $massiv){

                    echo ($massiv->name . '</br>');
                }



            ?>
        </div>
    </div>
    </div>
</div>