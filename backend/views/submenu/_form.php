<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\web\UploadedFile;

/* @var $this yii\web\View */
/* @var $model backend\models\Submenu */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="submenu-form">
    <?php $menu = common\models\Mainmenu::find()->all();?>
    <?php $form = ActiveForm::begin(['id'=>'myform','options'=>['class'=>'form-horizontal','enctype'=>'multipart/form-data']]); ?>

    <?= $form->field($model, 'menurefid')->dropDownList(
 ArrayHelper::map($menu, 'recid', 'menuname'),['prompt'=>'--Select Main menu']
            ) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'createdate')->textInput() ?>
    <?= $form->field($model, 'hassub')->checkbox() ?>

    <?= $form->field($model, 'photo')->fileInput() ?>
    
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
