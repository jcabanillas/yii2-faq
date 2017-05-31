<?php

/**
 * @var $model \jcabanillas\faq\models\FaqSearch
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
<div class="col-sm-12">

    <?php

    $form = ActiveForm::begin([
        // 'options'   => ['class' => 'form-inline faq-search'],
        'options' => ['class' => 'faq-search'],
        'action' => 'search',
        'method' => 'GET'
    ]);
    ?>
    <div class="row">
        <div class="col-sm-6">
            <?= $form->field($model, 'text', ['inputOptions' => ['class' => 'form-control c-square c-theme input-lg', 'placeholder' => Yii::t('faq', 'Text to search...')]])->label(false) ?>
        </div>
        <div class="col-sm-3">
            <?= Html::submitButton(Yii::t('faq', 'Find'), ['class' => 'btn c-theme-btn c-btn-uppercase btn-lg c-btn-bold c-btn-square']) ?>
        </div>
    </div>
    <?php ActiveForm::end(); ?>
    <br>
    <br>
    <br>
</div>