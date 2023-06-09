<?php

    use yii\helpers\Html;
    use yii\grid\ActionColumn;
    use yii\grid\GridView;
    use yii\grid\SerialColumn;

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
            'kelas015',
            'status015',
            
            ['class' => ActionColumn::className(),]
        ]
    ]);
    
?>  