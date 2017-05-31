<?php

namespace jcabanillas\faq\models;

use yii;
use yii\db\ActiveRecord;

/**
 * Base Class for FAQ classes
 * Class Faq
 * @package jcabanillas\faq\models
 */
class Faq extends ActiveRecord
{
    /**
     * Like or ILike
     * @return string
     */
    public static function like() {
        return Yii::$app->db->driverName === 'pgsql' ? 'ilike' : 'like';
    }
}