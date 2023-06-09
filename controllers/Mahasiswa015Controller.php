<?php

namespace app\controllers;
use app\models\Mahasiswa015;
use yii\data\ActiveDataProvider;
use Yii;

class Mahasiswa015Controller extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = Mahasiswa015::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);
        return $this->render('index', [
            'dataProvider' => $dataProvider
        ]);
    }

    public function actionCreate()
    {
        $mahasiswa015 = new Mahasiswa015;
        $mahasiswa015->nim015 = '60200121015'.'-'. rand(1,100);
        $mahasiswa015->nama015 = 'Rahmat Fajri Ishar';
        $mahasiswa015->kelas015 = 'D';
        $mahasiswa015->status015 = 'Baru';
        if ($mahasiswa015->save()) {
            Yii::$app->session->setFlash('success','Data Tersimpan');
        } else {
            Yii::$app->session->setFlash('error','Gagal Menyimpan Data');
        }
        return $this->redirect(['index']);
    }

    public function actionUpdate($id)
    {
        $mahasiswa015 = Mahasiswa015::findOne(['id015' => $id]);
        if ($mahasiswa015 !== null) {
            $mahasiswa015->kelas015 = 'A';
            $mahasiswa015->status015 = 'Update';
            if ($mahasiswa015->save()) {
                Yii::$app->session->setFlash('success','Data Terupdate');
            } else {    
                Yii::$app->session->setFlash('error','Gagal Mengupdate Data');
            }
        } else {
            Yii::$app->session->setFlash('error','Data Tidak Ditemukan');
        }
        return $this->redirect(['index']);
    }

    public function actionDelete($id)
    {
        $mahasiswa015 = Mahasiswa015::findOne(['id015' => $id]);
        if ($mahasiswa015 !== null && $mahasiswa015->delete()) {
            Yii::$app->session->setFlash('success','Data Terhapus');
        } else {
            Yii::$app->session->setFlash('error','Gagal Menghapus Data');
        }
        return $this->redirect(['index']);
    }

    public function actionView($id)
    {
        $mahasiswa015 = Mahasiswa015::findOne([$id]);
        if ($mahasiswa015 === null) {
            Yii::$app->session->setFlash('error','Data Tidak Ditemukan');
            return $this->redirect(['index']);
        }
        return $this->render('view', ['mahasiswa015' => $mahasiswa015]);
    }
}
