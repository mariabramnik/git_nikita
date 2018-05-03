<?php
?>
<div class="container">
    <div class="row">
        <p class="red" >метод array_reduce  </p>
        <div class="col-md-4" style="float: left">
            <p class="red">Это начальный массив</p>
            <?php
            foreach($arrFruitNames as $key => $value){
               echo $key . '=> ' . $value . '</br>';

            }

            ?>

        </div>

        <div class="row">
            <p class="red" >метод array_reduce использует collback функцию и сводит  массив к одному значению </p>

            <div class="col-md-4">

                <?php
                echo $result;
                ?>


            </div>
            <div class="col-md-4">
                <p class="red" >метод array_filter пропускает массив через collback функцию и возвращает массив из элементов отвечающих условию</p>
                <p class="green" >в этом конкретном случае оставляет только те, у кого длина строки больше 4</p>
                <?php
                foreach($arrResult as $key => $value){
                    echo $key . '=> ' . $value . '</br>';

                }

                ?>


            </div>
    </div>
</div>
</div>
