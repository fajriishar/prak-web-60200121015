<?php

namespace app\controllers;
use app\models\Provinsi;
use yii\data\ActiveDataProvider;

class ProvinsiController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = Provinsi::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);
        return $this->render('index', [
            'dataProvider' => $dataProvider
        ]);
    }

}
