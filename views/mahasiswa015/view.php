<?php

    use yii\widgets\DetailView;
    use app\models\Mahasiswa015;
?>

<?=
    DetailView::widget([
        'model' => $mahasiswa015,
        'attributes' => [
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
                        return 'Tidak Tersedia';
                    }
                }
            ],
        ],
    ]);

?>