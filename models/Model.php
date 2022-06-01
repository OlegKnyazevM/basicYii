<?php

namespace app\models;

use yii\db\ActiveRecord;

class Model extends ActiveRecord
{
    public static function tableName(){
        return 'users';
    }

    public function getModel(){
        return $this->hasOne(Model::className(), ['id' => 'user_id']);
    }
}