<?php
/**
 * Created by PhpStorm.
 * User: Bramnik
 * Date: 3/27/2018
 * Time: 10:29 PM
 */

namespace app\controllers;
use Yii;
use app\models\Vegetable;
use app\models\Fruit;
use yii\web\Controller;
use yii\helpers\ArrayHelper;

require_once './../core/functions.php';

function CBfunction($a){
    $a = 'кукуруза';
    return $a;

}
function Show_Changes($n, $m)
{
    return("было $n , а стало  - $m");
}
function UpperVeg(&$a){
    $a = strtoupper($a);
}
function UpperVegObj(&$a){
         ($a->name = strtoupper($a->name));
}

function Сompare($a, $b) {
    $strName1 = $a->name ;
    $strName2 = $b->name ;

    if ($strName1 < $strName2) {
        return -1;
    } elseif ($strName1 > $strName2) {
        return 1;
    } else {
        return 0;
    }
}


class VegetableController extends Controller
{

    public function actionIndex()
    {


     //   $vegetablesModel = Vegetable::findOne(2);
     //  var_dump($vegetablesModel); die;
        //echo $vegetablesModels;
 $arrayVeg[] = array("asparagus", "parsley", "peas", "beans");
 $arrVeg = array("asparagus", "parsley", "peas", "beans");
        $array1 = array(
            "1" => "bow",
            "2" => "cabbage",
        );

        $array2 = [
            "1" => "pepper",
            "2" => "zucchini",
        ];
        $array3 = [
             1 => "eggplant",
                2 => "garlic",
            ];


        return $this->render('index', [ 'arrayVeg' => $arrayVeg,'array1'=> $array1,'array2'=> $array2,'array3'=> $array3,'arrVeg'=>$arrVeg

        ]);
    }
    public function actionKey(){
          // $vegetablesModel = Vegetable::findOne(2);
           //var_dump($vegetablesModel); die;
        $vegetablesModels = Vegetable::find()->all();

        return $this->render('key', [  'vegetablesModels' =>  $vegetablesModels

        ]);
    }
    public function actionWork(){

       //$request = Yii::$app->request->post(); //Весь массив $_POST
  //      echo json_encode(Yii::$app->request->post());
       // $post = $request->post();

         //Конкретный параметр
       if (Yii::$app->request->post('id')) {
           $id = Yii::$app->request->post('id');
       }
       else {
            echo('тут что-то не в порядке');
        }


        return $this->render('work', ['id' => $id]);

    }
    public function actionPop(){
        $ModelsVegetablesPop = $vegetablesModels = Vegetable::find()->all();
        $vegetable = array_pop($ModelsVegetablesPop);
        $vegetableShift = array_shift($ModelsVegetablesPop);


        return $this->render('pop',['vegetable' => $vegetable,'ModelsVegetablesPop' => $ModelsVegetablesPop,
            'vegetableShift' =>  $vegetableShift

        ]);

    }
    public function actionPad(){
        $ModelsVegetablesPad  = Vegetable::find()->all();
        $vegetable1 = new Vegetable();
        $vegetable1->id = 12;
        $vegetable1 ->name = 'horseradish';
        $vegetable2 = new Vegetable();
        $vegetable2->id = 13;
        $vegetable2 ->name = 'radish';
        $ModelsVegetablesPadNewRight = array_pad($ModelsVegetablesPad,20,$vegetable1);
        $ModelsVegetablesPadNewLeft = array_pad($ModelsVegetablesPad,-20,$vegetable2);

        return $this->render('pad',['ModelsVegetablesPadNew' => $ModelsVegetablesPadNewRight,'ModelsVegetablesPadNewLeft'=>
            $ModelsVegetablesPadNewLeft

        ]);

    }
    public function actionMap(){
        $arrNames[]=array();
        $ModelsVegetablesMap  = Vegetable::find()->all();
        $i = 0;
        foreach ($ModelsVegetablesMap as $model){
            $arrNames[$i] = $model->name;
            $i++;
        }
        $arrNamesNew = array_map('app\controllers\CBfunction',$arrNames);
        $ShowChanges = array_map('app\controllers\Show_Changes', $arrNames, $arrNamesNew);
        $arrAdditionalStart = array('Hello','Привет','Sveiki','Shalom','Chao','Hallo','Hi','Hej','Tere','Czesc','Ahoj');
        $arrAdditionalEnd = array('Goodbay','До свидания','Chau','Lehitraot','Chao','Chus','Heida','Farvel','Huvasti','Do widzenia','Sbohem');
        $arrMultiDemensional = array_map(null,$arrAdditionalEnd,$arrNames,$arrAdditionalStart,  $arrNamesNew);

        return $this->render('map',['arrNamesNew'=> $arrNamesNew, 'arrNames' => $arrNames,'ShowChanges' => $ShowChanges,
            'arrMultiDemensional' =>  $arrMultiDemensional

        ]);
    }
    public function actionSum()
    {
        $arrNumber=array(1,2,3,4,5,6,7,8,9);
        $arrNames[] = array();
        $ModelsVegetablesMap = Vegetable::find()->all();
        $i = 0;
        foreach ($ModelsVegetablesMap as $model) {
            $arrNames[$i] = $model->name;
            $i++;
        }

        $sumNumber = array_sum($arrNumber);
        $sumNames = array_sum($arrNames);
        return $this->render('sum',['arrNumber'=> $arrNumber, 'arrNames' => $arrNames,'sumNumber' => $sumNumber,
            'sumNames' => $sumNames


        ]);

    }
    public function actionPush(){

        $ModelsVegetablesMap = Vegetable::find()->all();

        $i = 0;
        foreach ($ModelsVegetablesMap as $model) {
            $arrNames[$i] = $model->name;
            $i++;
        }
        $ModelsVegetablesMapOld = $ModelsVegetablesMap;
        $arrNamesOld =  $arrNames;
        array_push($arrNames,'horseradish','radish');
        $arrayNewDiff = array_diff($arrNames,$arrNamesOld);
        $vegetable1 = new Vegetable();
        $vegetable1->id = 12;
        $vegetable1 ->name = 'horseradish';
        $vegetable2 = new Vegetable();
        $vegetable2->id = 13;
        $vegetable2 ->name = 'radish';
        array_push($ModelsVegetablesMap, $vegetable1,$vegetable2);
        //$ModelsVegetablesMapDiff = array_diff($ModelsVegetablesMap,$ModelsVegetablesMapOld);
        ////не работает т к не может привести к типу string
        return $this->render('push',['ModelsVegetablesMapOld'=> $ModelsVegetablesMapOld,'ModelsVegetablesMap' => $ModelsVegetablesMap,
            'arrayNewDiff' => $arrayNewDiff

        ]);
    }
    public function actionFlip(){
        $ModelsVegetablesMap = Vegetable::find()->all();
        $i = 0;
        foreach ($ModelsVegetablesMap as $model) {
            $arrNames[$i] = $model->name;
            $i++;
        }
        $arrRand = array_rand($arrNames,3);
        $arrFlipped = array_flip($arrNames);
        return $this->render('flip',['arrNames'=> $arrNames,'arrFlipped' => $arrFlipped, 'arrRand' => $arrRand


        ]);
    }
    public function actionWalk(){
        $ModelsVegetablesMap = Vegetable::find()->all();
        $i = 0;
        foreach ($ModelsVegetablesMap as $model) {
            $arrNames[$i] = $model->name;
            $i++;
        }
        $arrOld = $arrNames;
        $arrOldObj = $ModelsVegetablesMap;
        //array_walk($arrNames,'app\controllers\UpperVeg');
        array_walk($arrNames,function(&$a){$a = strtoupper($a);});//это лямбда функция .т.т.у нее нет имени
        array_walk($ModelsVegetablesMap,'app\controllers\UpperVegObj');
        return $this->render('walk',['arrNames'=> $arrNames,'arrOld' => $arrOld,
            'ModelsVegetablesMap' => $ModelsVegetablesMap,'arrOldObj' => $arrOldObj

        ]);
    }
    public function actionFill(){

        $arrNew = array_fill(5,20, "redish" );
        $arrKeys = array_keys($arrNew);
        $arrValues = array_values($arrKeys);
        $arrKeysPattern = array_keys($arrNew,'redish');
        //var_dump( $arrNew);die;
        return $this->render('fill',['arrNew'=> $arrNew,'arrKeysPattern' => $arrKeysPattern,
            'arrKeys' => $arrKeys,'arrValues' => $arrValues


        ]);
    }
    public function actionUdiff(){
        $arrVegetable1 = Vegetable::find()->all();
        $arrVegetable2 = Vegetable::find()->all();
        $vegetable1 = new Vegetable();
        $vegetable1->id = 12;
        $vegetable1 ->name = 'horseradish';
        $vegetable2 = new Vegetable();
        $vegetable2->id = 13;
        $vegetable2 ->name = 'radish';
        $vegetable3 = new Vegetable();
        $vegetable3->id = 14;
        $vegetable3->name = 'artichoke';
        $vegetable4 = new Vegetable();
        $vegetable4->id = 15;
        $vegetable4->name = 'okra';
        $arrVegetablePadRight = array_pad($arrVegetable1,12,$vegetable3);
        $arrVegetablePadRight[13] = $vegetable4;
        $arrVegetable2[12] = $vegetable1;
        $arrVegetable2[13] = $vegetable2;
        //var_dump($arrVegetablePadRight);die;
        $arrayDiff = (array_udiff( $arrVegetablePadRight, $arrVegetable2,'app\controllers\Сompare'));
        $arrayDiff2 = (array_udiff($arrVegetable2,$arrVegetablePadRight,'app\controllers\Сompare'));
        return $this->render('udiff',['arrVegetablePadRight'=> $arrVegetablePadRight,'arrVegetable2' => $arrVegetable2,
            'arrayDiff' =>  $arrayDiff,'arrayDiff2' => $arrayDiff2

        ]);
    }
    public function actionMerge(){
        $arrVegetable = Vegetable::find()->all();
        $arrFruit = Fruit::find()->all();
        $arrCombined = array_merge($arrVegetable,$arrFruit);

        return $this->render('merge',['arrVegetable'=> $arrVegetable,'arrFruit' => $arrFruit,
            'arrCombined' =>  $arrCombined

        ]);
    }

}