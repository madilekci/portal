<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model vendor\kouosl\sosyal\models\Sosyalsearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kullanicilar-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'UserID') ?>

    <?= $form->field($model, 'Username') ?>

    <?= $form->field($model, 'Password') ?>

    <?= $form->field($model, 'Name') ?>

    <?= $form->field($model, 'Surname') ?>

    <?php // echo $form->field($model, 'Age') ?>

    <?php // echo $form->field($model, 'Location') ?>

    <?php // echo $form->field($model, 'Mail') ?>

    <?php // echo $form->field($model, 'Gender') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
