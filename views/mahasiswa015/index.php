<?php

    use yii\helpers\Html;
    use yii\grid\ActionColumn;
    use yii\grid\GridView;
    use yii\grid\SerialColumn;
    use app\models\Mahasiswa015;

?>

    <?= 
        Html::a('Mahasiswa Baru', ['create'], ['class' => 'btn btn-primary']); 
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => SerialColumn::className()],
            'id015',
            'nim015',
            'nama015',
            [
                'attribute' => 'kelas015',
                'value' => function ($model) {
                    if (isset(Mahasiswa015::KELAS[$model->kelas015])) {
                        return Mahasiswa015::KELAS[$model->kelas015];
                    } else {
                        return 'Tidak Tersedia';
                    }
                }
            ],
            [
                'attribute' => 'status015',
                'value' => function ($model) {
                    if (isset(Mahasiswa015::STATUS[$model->status015])) {
                        return Mahasiswa015::STATUS[$model->status015];
                    } else {
                        return 'Tidak tersedia';
                    }
                }
            ],
            
            ['class' => ActionColumn::className(),]
        ]
    ]);
    
?>  