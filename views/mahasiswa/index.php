<?php

    use app\models\Mahasiswa;
    use yii\helpers\Html;
    use yii\helpers\Url;
    use yii\grid\ActionColumn;
    use yii\grid\GridView;
    use yii\widgets\DetailView;

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
            'nim',
            'nama',
            'ipk',
            'id_jurusan',
            // 'profil015.foto_profile',

            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Mahasiswa $model) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ]

        ]
    ])
    
    ?>  

    <?php

        /* @var $this yii\web\View */
        /* @var $model app\models\YourModel */

        $this->title = 'Detail Data';
        $this->params['breadcrumbs'][] = ['label' => 'Data', 'url' => ['index']];
        $this->params['breadcrumbs'][] = $this->title;
        ?>

        <h1><?= $this->title ?></h1>

        <?= DetailView::widget([
            'model' => $model,
            'attributes' => [
                'attribute1',
                'attribute2',
                // Tambahkan atribut lainnya sesuai kebutuhan
            ],
    ]) ?>


</div>