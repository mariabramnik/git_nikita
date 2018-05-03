<?php
?>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <p class="red">метод array_sum. Сумма массива чисел </p>
            <?php
            foreach($arrNumber as $key=>$value){
                echo $value .'</br>';
            }
            echo('возвращает'. $sumNumber . '</br>');
            ?>

        </div>
        <div class="col-md-4">
            <p class="red">метод array_sum. Сумма массива строк </p>
            <?php
            foreach($arrNames as $key=>$value){
                echo $value .'</br>';
            }
            echo('возвращает'. $sumNames . '<br>');
            ?>
        </div>
</div>
</div>