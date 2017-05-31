<?php
/**
 * @var $groups \jcabanillas\faq\models\FaqGroups[] All Groups with current language
 * @var $group \jcabanillas\faq\models\FaqGroups Current group
 * @var $model \jcabanillas\faq\models\FaqSearch
 */

use yii\helpers\Html;
use yii\web\View;

$this->title = Yii::t('faq', 'FAQ');
$this->params['breadcrumbs'][] = $this->title;

?>
    <div class="c-content-box c-size-md ">
        <div class="container">
            <?= $this->render('_search', ['model' => $model]) ?>
            <div class="cbp-panel">
                <div id="filters-container" class="cbp-l-filters-underline">
                    <div data-filter="*" class="cbp-filter-item-active cbp-filter-item">
                        Todas
                    </div>
                    <?php foreach ($groups as $g): ?>
                        <div data-filter=".gid<?= $g->id ?>" class="cbp-filter-item">
                            <?= $g->name ?>
                        </div>
                    <?php endforeach; ?>
                </div>

                <div id="grid-container" class="cbp cbp-l-grid-faq">
                    <?php
                    $top = 0;
                    foreach ($groups as $g):
                        foreach ($g->faqQas as $qa):
                            ?>
                            <div class="cbp-item gid<?= $g->id ?>">
                                <div class="cbp-caption">
                                    <div class="cbp-caption-defaultWrap">
                                        <i class="fa fa-check-circle-o"></i><?= $qa->question ?>
                                    </div>
                                    <div class="cbp-caption-activeWrap">
                                        <div class="cbp-l-caption-body">
                                            <?= Html::decode($qa->answer) ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                            $top += 47;
                        endforeach;
                    endforeach;
                    ?>
                </div>
            </div>
        </div>
    </div>
<?php
$js = <<<JS
    (function ($, window, document, undefined) {
        'use strict';

// init cubeportfolio
        $('#grid-container').cubeportfolio({
            filters: '#filters-container',
            defaultFilter: '*',
            animationType: 'sequentially',
            gridAdjustment: 'responsive',
            displayType: 'default',
            caption: 'expand',
            mediaQueries: [{
                width: 1,
                cols: 1
            }],
            gapHorizontal: 0,
            gapVertical: 0
        });

    })(jQuery, window, document);
JS;
$this->registerJs($js, View::POS_END, get_class($this) . "_faq");
?>