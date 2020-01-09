<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model vendor\kouosl\sosyal\models\Kullanicilar */

$this->title = $model->Name;
$this->params['breadcrumbs'][] = ['label' => 'Kullanicilars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="kullanicilar-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->UserID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->UserID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'UserID',
            'Username:ntext',
            'Password:ntext',
            'Name:ntext',
            'Surname:ntext',
            'Age:ntext',
            'Location:ntext',
            'Mail:ntext',
            'Gender:ntext',
        ],
    ]) ?>

</div>
