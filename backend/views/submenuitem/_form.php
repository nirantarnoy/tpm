<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $model backend\models\Submenuitem */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="submenuitem-form">
    <?php $submenu = \backend\Models\Submenu::find()->all();?>
    <?php $form = ActiveForm::begin(['id'=>'myform','options'=>['class'=>'form-horizontal','enctype'=>'multipart/form-data']]); ?>

    <?= $form->field($model, 'submenurefid')->dropDownList(
            ArrayHelper::map($submenu, 'recid', 'name'),['prompt'=>'--Select---']
    ) ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?php //echo $form->field($model, 'createdate')->textInput() ?>

    
    <?= $form->field($model, 'photo')->fileInput(['maxlength' => true]) ?>
    <img src=""/>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
