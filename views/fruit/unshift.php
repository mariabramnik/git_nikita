<?php
?>
<div class="container">
    <div class="row">
        <p class="red" >метод array_unshift  </p>
        <div class="col-md-4" >
            <p class="red">Это изначальный массив</p>
            <?php
            foreach($arrFruitNamesOld as $key => $value){
                echo $key . '=> ' . $value . '</br>';

            }

            ?>

        </div>
        <div class="col-md-4" >
            <p class="red">Это после отработки метода array_unshift</p>
            <?php
            foreach($arrFruitNames as $key => $value){
                echo $key . '=> ' . $value . '</br>';

            }

            ?>

        </div>

    </div>
</div> */