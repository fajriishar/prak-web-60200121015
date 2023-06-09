<?php

namespace app\controllers;
use app\models\Mahasiswa;
use yii\data\ActiveDataProvider;

class MahasiswaController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = Mahasiswa::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);
        return $this->render('index', [
            'dataProvider' => $dataProvider
        ]);
    }

    public function actionTambah()
    {
        $mahasiswa = new Mahasiswa;
        $mahasiswa->nim = '60200121015';
        $mahasiswa->nama = 'Rahmat Fajri Ishar';
        $mahasiswa->ipk = '3.99';
        $mahasiswa->id_jurusan = '01';
        // if ($mahasiswa->save()) {
        //     return $this->redirect(['index']);
        // }
        if ($mahasiswa->save()) {
            return $this->redirect(['index']);
        }
        else {
            var_dump($mahasiswa->getErrors());
            die();
        }

    }

    public function actionUpdate($id)
    {
        $mahasiswa = Mahasiswa::findOne($id);
        $mahasiswa->nim = '60200';
        // if ($mahasiswa->save()) {
        //     return $this->redirect(['index']);
        // }
        if ($mahasiswa->save()) {
            return $this->redirect(['index']);
        }
        else {
            var_dump($mahasiswa->getError());
            die();
        }

    }

    public function actionDelete($id)
    {
        $mahasiswa = Mahasiswa::findOne($id);
        // if ($mahasiswa->delete()) {
        //     return $this->redirect(['index']);
        // }
        if ($mahasiswa->delete()) {
            return $this->redirect(['index']);
        }
        else {
            var_dump($mahasiswa->getError());
            die();
        }
    }

    public function actionView($id)
    {
        $query = Mahasiswa::findOne($id);
        return $this->render('view');
    }
}