<?php

namespace jcabanillas\faq\models\queries;

/**
 * This is the ActiveQuery class for [[\jcabanillas\faq\models\FaqQa]].
 *
 * @see \jcabanillas\faq\models\FaqQa
 */
class FaqQaQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return \jcabanillas\faq\models\FaqQa[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \jcabanillas\faq\models\FaqQa|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
