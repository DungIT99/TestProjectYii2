<?php

namespace backend\models;
// use yii\helpers\ArrayHelper;
use Yii;

/**
 * This is the model class for table "category".g
 *
 * @property int $id
 * @property string $name
 * @property int $status
 * @property int $created_at
 * @property int $updated_at
 */
class Category extends \yii\db\ActiveRecord
{
    private $_cates =[];
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'created_at', 'updated_at'], 'required'],
            [['status', 'created_at', 'updated_at'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['name'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Họ Tên',
            'status' => 'Trạng thái',
            'created_at' => 'Ngày tạo',
            'updated_at' => 'Ngày cập nhập',
        ];
    }

    public function getCates(){
//       $add =  ArrayHelper::map( category::find()->all(),'name');
// echo $add;
         $add= category::find()->asArray()->all();
        return $add;
}
}