<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model common\models\Sections */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sections-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'project_id')->dropDownList(
        ArrayHelper::map(\common\models\Projects::find()->all(), 'id', 'name'),  
	['prompt'=>'Select Project Name']); ?>

    <?= $form->field($model, 'section_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'section_incharge_id')->dropDownList(
        ArrayHelper::map(\common\models\User::find()->where(['user_level'=>4])->asArray()->all(), 'id', 'username'),  
	['prompt'=>'Select Username']); ?>

    <?php // $form->field($model, 'created_at')->textInput() ?>

    <?php // $form->field($model, 'created_by')->textInput(['maxlength' => true]) ?>

    <?php // $form->field($model, 'updated_at')->textInput() ?>

    <?php // $form->field($model, 'updated_by')->textInput(['maxlength' => true]) ?>

    <?php // $form->field($model, 'is_deleted')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
