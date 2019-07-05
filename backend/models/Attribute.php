<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "attribute".
 *
 * @property int $id
 * @property string $name
 * @property int $product_id
 * @property int $status
 * @property int $created_at
 * @property int $updated_at
 */
class Attribute extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'attribute';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'product_id', 'created_at', 'updated_at'], 'required'],
            [['product_id', 'status', 'updated_at'], 'integer'],
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
            'name' => 'Tên',
            'product_id' => 'sản phẩm',
            'status' => 'Trạng thái',
            'created_at' => 'ngày nhập',
            'updated_at' => 'ngày update',
        ];
    }
}
