<?php

namespace app\controllers;
use yii\db\ActiveQuery;
use Yii;
use yii\db\Query;
use app\models\Fruit;
use app\models\Vegetable;
use app\models\FruitSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;


function CBfunction($carry, $item)
{
    $item =2 ;
    $carry += $item;
    return $carry;
}
function CBfilter($item)
{
    $slen = strlen( $item );
    return $slen>4;
}

/**
 * FruitController implements the CRUD actions for Fruit model.
 */
class FruitController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Fruit models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new FruitSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Fruit model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Fruit model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Fruit();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Fruit model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Fruit model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Fruit model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Fruit the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Fruit::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionChunk(){
       $ModelsFruits = Fruit::find()->all();
       $arrChunk = array_chunk($ModelsFruits,3);
       $fruit1 = new Fruit();
       $fruit2 = new Fruit();
       $fruit1->id = 2;
       $fruit1->name = 'pear';
       $fruit2->id = 5;
       $fruit2->name = 'lemon';
       $arrColumn = array_column($arrChunk,1);
       $res1 = in_array($fruit1, $ModelsFruits,true);
       $res2 = in_array($fruit2, $ModelsFruits,true);
     //  var_dump($res1);die;

        return $this->render('chunk',['ModelsFruits' => $ModelsFruits,'arrChunk' => $arrChunk,'res1' => $res1,'res2' => $res2,
            'arrColumn' => $arrColumn


        ]);
    }
    public function actionSlice(){
        $arrFruit = Fruit::find()->all();
        $arrVegetable = Vegetable::find()->all();
        $arrSlice = array_slice($arrFruit,3,2);
        $arrSliceNeg = array_slice($arrFruit,-4,3);
        $arrSliceNegLen = array_slice($arrFruit,3,-2);
        $arrFruitNew = $arrFruit;
        $arrSplice = array_splice($arrFruitNew,3,2,$arrVegetable);



        return $this->render('slice',['arrFruit'=> $arrFruit,'arrSlice' => $arrSlice,'arrSplice' => $arrSplice,
            'arrSliceNeg' => $arrSliceNeg,'arrSliceNegLen' => $arrSliceNegLen,'arrFruitNew' => $arrFruitNew


        ]);
    }
    public function actionUnique(){
        $arrFruit = Fruit::find()->all();
        $fruit1 = new Fruit();
        $fruit2 = new Fruit();
        $fruit1->id = 1;
        $fruit1->name = 'apple';
        $fruit2->id = 5;
        $fruit2->name = 'lemon';
        $arrFruitNew = array_pad($arrFruit,16,$fruit2);
        $i = 0;
        $arrFruitNewNames[] = array();
        foreach ($arrFruitNew as $model){
            $arrFruitNewNames[$i] = $model->name;
            $i++;
        }
        $arrFruitNewUnique = array_unique($arrFruitNewNames);
       // $arrFruitNewUniqueObj = array_unique($arrFruitNew);


        return $this->render('unique',['arrFruit'=> $arrFruit,'arrFruitNew' =>  $arrFruitNew,
            'arrFruitNewUnique' => $arrFruitNewUnique



        ]);
    }
    public function actionSearch(){
        $arrFruit = Fruit::find()->all();
        $fruit1 = new Fruit();
        $fruit2 = new Fruit();
        $fruit1->id = 2;
        $fruit1->name = 'pear';
        $fruit2->id = 5;
        $fruit2->name = 'lemon';
        $i = 0;
        foreach ($arrFruit as $model){
            $arrFruitNames[$i] = $model->name;
            $i++;
        }
        $fruit3 = $arrFruitNames[0];
        $fruit4 = $arrFruitNames[2];
        $res = array_search('apple',$arrFruitNames);
        $res1 = array_search('pear',$arrFruitNames);
        $res2 = array_search('peach',$arrFruitNames);
        //$res = array_search($fruit1,$arrFruit);//не найдет обьект. так как для php нужен тот же адрес. и вообще не такой же обькт а тот же самый
     //   var_dump($fruit1); die;
     // var_dump($res);die;
        return $this->render('search',['arrFruit'=> $arrFruit,'res' => $res, 'fruit1' => $fruit1,'res1'=>$res1,'fruit3'=>$fruit3,'fruit4'=>$fruit4,
                 'res2' => $res2
        ]);
    }
    public function actionReduce(){
        $arrFruit = Fruit::find()->all();
        $arrFruitNames[]= array();
        $i = 0;
        foreach ($arrFruit as $model){
            $arrFruitNames[$i] = $model->name;
            $i++;
        }
        $result = array_reduce($arrFruitNames,'app\controllers\CBfunction');
        //var_dump($result);die;
        $arrResult = array_filter($arrFruitNames,'app\controllers\CBfilter');

        return $this->render('reduce',['arrFruitNames'=> $arrFruitNames,'result' => $result,'arrResult' => $arrResult

        ]);
    }
    public function actionCombine(){
        $arrFruit = Fruit::find()->all();
        $arrVegetable = Vegetable::find()->all();
        $arrVegetableSmall = array_splice($arrVegetable,6);
        //var_dump(count($arrFruit));
       // var_dump(count($arrVegetableSmall));die;
        $arrCombineObj = array_combine(ArrayHelper::getColumn($arrFruit, 'name'), ArrayHelper::getColumn($arrVegetableSmall,'name'));
        //$arrCombineObj = array_combine($arrFruit,$arrVegetableSmall);
        //$arrFruitLen = count($arrFruit);//6
        //$arrVegetableSmallLen = count($arrVegetableSmall);//6


        $arrFruitNames[]= array();
        $arrVegetableNames[] = array();
        $i = 0;
        foreach ($arrFruit as $model){
            $arrFruitNames[$i] = $model->name;
            $i++;
        }
        foreach ($arrVegetable as $model){
            $arrVegetableNames[$i] = $model->name;
            $i++;
        }
        $arrVegetableSizeSmall = array_splice($arrVegetableNames,6);
       // $arrCombine = array_combine($arrFruitNames,$arrVegetableSizeSmall);
        $arrReverse = array_reverse($arrCombineObj);
        return $this->render('combine',['arrVegetableSmall'=> $arrVegetableSmall,'arrVegetableSizeSmall' => $arrVegetableSizeSmall,
            'arrCombineObj' => $arrCombineObj , 'arrReverse' => $arrReverse,'arrFruit' => $arrFruit
           // ,'arrCombine' => $arrCombine

        ]);
    }
    public function actionUnshift(){
        $arrFruit = Fruit::find()->all();
        $arrFruitNames[]=array();
        $i = 0;
        foreach ($arrFruit as $model){
            $arrFruitNames[$i] = $model->name;
            $i++;
        }
        $fruit1 = new Fruit();
        $fruit2 = new Fruit();
        $fruit1->id = 8;
        $fruit1->name = 'niktarino';
        $fruit2->id = 7;
        $fruit2->name = 'lemon';
        $arrFruitNew = array_unshift($arrFruit,$fruit1,$fruit2);
        var_dump($arrFruitNew);die;
        $arrFruitNamesOld = $arrFruitNames;
        array_unshift($arrFruitNames,'lemon','nectarino');
        return $this->render('unshift',['arrFruit'=> $arrFruit,'arrFruitNames' => $arrFruitNames, 'arrFruitNamesOld' => $arrFruitNamesOld


        ]);
    }
    public function actionReplace(){

        $arrFruit = Fruit::find()->all();
        $arrVegetable = Vegetable::find()->all();
        $basket = array_replace($arrVegetable,$arrFruit);
        //var_dump($arrVegetable);die;
        return $this->render('replace',['arrFruit'=> $arrFruit,'arrVegetable' => $arrVegetable, 'basket' => $basket

        ]);
    }

    public function actionDom(){
      //  $a = "1";
      //  $a[$a]="2";
      //  echo $a; die;

        $arr1 =  array(1,1,3,4,3);
        $count1 = count($arr1) ;
        for($i = 0 ; $i < $count1; $i++){
            $x = array_shift($arr1);
            $res = in_array($x,$arr1);
            if( $res === FALSE ){
                break;
            }
            else{
                 array_push($arr1,$x);
                //$arr1[] = $x;
            };
        };

        $arr2 = array(1,2,3,4,5,6,7,8,9,2,3,4,5,6,7,8,1);
        $arr2Unique1 = array_unique($arr2);
        $arr2Unique2 = $arr2Unique1;
        $arrMerge = array_merge($arr2Unique1,$arr2Unique2);
        $arrDiff = array_diff_assoc($arr2,$arrMerge);
        $arrDiffRes = array_diff($arr2,$arrDiff);
        return $this->render('dom',['x' => $x,'arrDiffRes' => $arrDiffRes
        ]);
    }
    public function actionQueries(){

        $query = new \yii\db\Query();
        /*$query->createCommand(
        'CREATE TABLE Customer
            id INT PRIMARY KEY,
            Firstname VARCHAR(30) NOT NULL,
            Lastname VARCHAR(30) NOT NULL,
            tel VARCHAR(20)

         ')->queryAll();
*/
        $rows = (new \yii\db\Query())
            ->select(['id', 'name'])
            ->from('vegetable')
            ->where(['weight' => '100'])
            ->limit(3)
            ->all();
       // $query->select(['id', 'name','weight'])
       //     ->addSelect(['price']);

        return $this->render('queries',['rows' => $rows
        ]);
    }


}
