<?php

/** @var yii\web\View $this */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent mt-5 mb-5">
        <h1 class="display-4">AI系統產生器!</h1>

        <?php $form = ActiveForm::begin([
            'id' => 'login-form',
            'fieldConfig' => [
                'template' => "{input}\n{error}",
                'labelOptions' => ['class' => 'col-lg-1 col-form-label mr-lg-3'],
                'inputOptions' => ['class' => 'col-lg-3 form-control'],
                'errorOptions' => ['class' => 'col-lg-7 invalid-feedback'],
            ],
        ]); ?>
        <p class="lead">你想要一個什麼系統</p>
        <?= $form->field($model, 'aiMessage')->textInput(['autofocus' => true]) ?>
        <?= Html::Button('員工管理', ['class' => 'btn btn-md btn-secondary','onclick'=>'$("#dynamicmodel-aimessage").val("員工管理")']) ?>
        <?= Html::Button('客戶管理', ['class' => 'btn btn-md btn-secondary','onclick'=>'$("#dynamicmodel-aimessage").val("客戶管理")']) ?>
        <?= Html::Button('進銷存管理', ['class' => 'btn btn-md btn-secondary','onclick'=>'$("#dynamicmodel-aimessage").val("進銷存管理")']) ?>
        
        <p class="lead">有什麼客製化的要求嗎</p>
        <?= $form->field($model, 'text')->textarea(['autofocus' => true]) ?>
        <div class="form-group">
            <div>
                <?= Html::submitButton('產生', ['class' => 'btn btn-lg btn-success', 'name' => 'login-button']) ?>
            </div>
        </div>

        <?php ActiveForm::end(); ?>
    </div>
</div>
