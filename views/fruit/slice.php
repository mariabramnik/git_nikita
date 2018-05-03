<?php
?>
<div class="container">
    <div class="row">
        <p class="red">метод array_slice </p>
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
            <p class="red">Применим к нему метод array_slice($arrFruit,3,2)</p>
                <p class="green">Начинается пропустив 3 первых значения и имеет длину 2</p>
            <?php
            foreach($arrSlice as $model){
                echo ($model->name . '</br>');
            }

            ?>
            </div>
            <div>
                <p class="red">Применим к нему метод array_slice($arrFruit,-4,3)</p>
                <p class="green">Начинается с 4 с конца значения и имеет длину 3</p>
                <?php
                foreach($arrSliceNeg as $model){
                    echo ($model->name . '</br>');
                }

                ?>
            </div>
            <div>
                <p class="red">Применим к нему метод array_slice($arrFruit,3,-2)</p>
                <p class="green">Начинается пропустив 3 первых значения и кончается за 2 до конца</p>
                <?php
                foreach($arrSliceNegLen as $model){
                    echo ($model->name . '</br>');
                }

                ?>
            </div>
        </div>
        <div class="col-md-4">
            <div>
                <p class="red">Применим к нему метод array_splice($arrFruit,3,2,$arrVegetable)</p>
                <?php
                foreach($arrSplice as $model){
                    echo ($model->name . '</br>');
                }

                ?>
            </div>
            <div>
                <p class="red">После этого массив $arrFruit после 3 элемента, в месте выреза и после заменился на $arrVegetable)</p>
                <?php
                foreach($arrFruitNew as $model){
                    echo ($model->name . '</br>');
                }

                ?>
            </div>

        </div>
    </div>
</div>