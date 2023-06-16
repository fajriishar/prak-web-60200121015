<?php
    use yii\widgets\ActiveForm;
    use yii\helpers\Html;
    use app\models\Mahasiswa015;
?>

<?php $form = ActiveForm::begin() ?>

    <?= $form->field($model, 'nim015') ?>
    <?= $form->field($model, 'nama015') ?>
    <?= $form->field($model, 'kelas015')->dropDownList(Mahasiswa015::KELAS) ?>
    <?= $form->field($model, 'status015')->dropDownList(Mahasiswa015::STATUS) ?>

    <?= Html::submitButton('Simpan', [
        'class' => 'btn btn-primary'
    ]) ?>

<?php ActiveForm::end() ?>
