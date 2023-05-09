<?php

namespace app\controllers;
use yii\web\controller;
use yii\web\pagination;
use app\models\Krss;

class KrsController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionTes()
    {
        $users = Krss::find()->all();
        return $this->render('tes', [
            'users' => $users,
        ]); 
    }

}
