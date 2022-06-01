<?php

namespace app\models;

use yii\db\ActiveRecord;

class Products extends ActiveRecord
{
    public static function tableName()
    {
        return 'products';
    }

    public function getProducts(){
        return $this->hasMany(Products::className(), []);
    }
}