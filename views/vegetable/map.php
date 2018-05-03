<?php


?>
<?php ?>
<div class = "container">
    <p class="red">С помощью collback функции заменим все значения на слово 'кукуруза' </p>
    <div class="row">
        <div col-md-4 style="float: left">

            <p class="red">метод array_map. было </p>

            <?php

            foreach($arrNames as $key=>$value){
                echo $value .'</br>';
            }

            ?>
        </div>
        <div class="col-md-4" style="float: left">
            <p class="red">метод array_map. стало : </p>

            <?php
            foreach($arrNamesNew as $key=>$value){
                echo $value .'</br>';
            }

            ?>
        </div>

    </div>
    <div class="row">
        <div class="col-md-4" style="float: left">
            <p class="red">метод array_map. Пример с использованием двух массивов </p>
            <?php
            foreach($ShowChanges as $key=>$value){
                echo $value .'</br>';
            }

            ?>
         </div>
<div class="col-md-4" style="float: left">
    <p class="red">С помощью array_map можно соединить разные массивы и создастся массив массивов </p>
    <?php
    foreach($arrMultiDemensional as $key => $massiv){
        echo('</br>');
        foreach ($massiv as $key => $value){
            echo($value . '  ');
        }
    }


    ?>
</div>
</div>
</div>