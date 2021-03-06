<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\PlantsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Plants';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="plants-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Plants', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'plant_name',
            [
                'attribute'=>'active',
                'header'=>'Status',
                'filter' => ['1'=>'Active', '0'=>'Deactive'],
                'format'=>'raw',
                'value' => function($model, $key, $index)
                {   
                    if($model->status == '1')
                    {
                        return "Active";
                    }
                    else
                    {   
                        return "Deactive";
                    }
                },
            ],
            //'created_at',
            //'created_by',
            //'updated_at',
            //'updated_by',
            //'is_deleted',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
