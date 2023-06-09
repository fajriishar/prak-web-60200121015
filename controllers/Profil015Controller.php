<?php

namespace app\controllers;
use app\models\Profil015;
use yii\data\ActiveDataProvider;

class Profil015Controller extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = Profil015::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);
        return $this->render('index', [
            'dataProvider' => $dataProvider
        ]);
    }

}
