<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel vendor\kouosl\sosyal\models\Sosyalsearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kullanicilars';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kullanicilar-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Kullanicilar', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'UserID',
            'Username:ntext',
            'Password:ntext',
            'Name:ntext',
            'Surname:ntext',
            //'Age:ntext',
            //'Location:ntext',
            //'Mail:ntext',
            //'Gender:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
