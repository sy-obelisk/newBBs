<?php

namespace app\modules\basic\models;

use yii\db\ActiveRecord;

class Role extends ActiveRecord
{
    public static function tableName(){
        return '{{%role}}';
    }

}
