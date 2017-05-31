<?php

namespace jcabanillas\faq\models\queries;

/**
 * This is the ActiveQuery class for [[\jcabanillas\faq\models\FaqGroups]].
 *
 * @see \jcabanillas\faq\models\FaqGroups
 */

use jcabanillas\faq\models\FaqLanguages;
use yii\db\ActiveQuery;

class FaqGroupsQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * Add condition to find group by unique language code
     * @param $code string
     * @return $this ActiveQuery
     */
    public function byLangCode($code) {
        return $this->joinWith(['lang' => function ($query) use ( $code ) {
            /** @var $query ActiveQuery */
            return $query
                ->from(['lang' => FaqLanguages::tableName()])
                ->andWhere('[[lang.code]] = :code', [':code' => $code]);
        }]);
    }

    public function byLangAndId($code, $gid) {
        return $this->alias('group')->with('faqQas')->byLangCode($code)->where('[[group.id]] = :gid', [':gid' => $gid]);
    }

    /**
     * @inheritdoc
     * @return \jcabanillas\faq\models\FaqGroups[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \jcabanillas\faq\models\FaqGroups|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
