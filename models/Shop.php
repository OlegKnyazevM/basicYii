<?php

namespace app\models;

use yii\db\ActiveRecord;

class Shop extends ActiveRecord
{
    public static function tableName()
    {
        return 'shoping';
    }

    public function getShop(){
        return $this->hasMany(Shop::className(), ['user_id' => 'id']);
    }
}