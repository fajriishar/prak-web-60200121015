<?php

    use yii\widgets\DetailView;

?>

<?=

    DetailView::widget([
        'model' => $mahasiswa015,
        'attributes' => [
            'id015',
            'nim015',
            'nama015',
            'kelas015',
            'status015',
        ],
    ]);

?>