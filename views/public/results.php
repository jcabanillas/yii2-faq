<?php

/**
 * @var $model \jcabanillas\faq\models\FaqSearch
 * @var $qas \jcabanillas\faq\models\FaqQa[]
 */

use yii\helpers\Html;

$this->title = Yii::t('faq', 'Search by FAQ');
$this->params['breadcrumbs'][] = ['label' => Yii::t('faq', 'FAQ'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="c-content-box c-size-md ">
    <div class="container">
        <?= $this->render('_search', ['model' => $model]) ?>

        <h3><?= Yii::t('faq', 'Search results by «{query}»', ['query' => empty($model->text) ? '...' : $model->text]) ?> </h3>
        <hr>

        <div class="col-sm-8">
            <?php foreach ($qas as $qa): ?>
                <h4><?= $qa->question ?></h4>
                <h6 class="text-muted"><?= Html::a($qa->group->name, ['index', 'gid' => $qa->group->id], ['class' => 'faq-group-link-small']) ?></h6>
                <h6><?= Html::decode($qa->answer) ?></h6>
                <br>
            <?php endforeach; ?>
        </div>
    </div>
</div>
