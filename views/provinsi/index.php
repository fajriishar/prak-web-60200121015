<?php

    use app\models\Provinsi;
    use yii\helpers\Html;
    use yii\helpers\Url;
    use yii\grid\ActionColumn;
    use yii\grid\GridView;

?>

<div>

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::button('Mahasiswa Baru', ['class' => 'btn btn-primary']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            'prov_nama',
            'prov_nama_singkat',
            'total_kabupaten',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Provinsi $model) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ]

        ]
    ])
    
    ?>  

</div>