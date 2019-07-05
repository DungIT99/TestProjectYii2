<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "order_detail".
 *
 * @property int $order_id
 * @property int $product_id
 * @property int $quantity
 * @property int $price
 */
class OrderDetail extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'order_detail';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['product_id', 'quantity', 'price'], 'integer'],
            [['price'], 'required'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'order_id' => 'Order ID',
            'product_id' => 'Product ID',
            'quantity' => 'Quantity',
            'price' => 'Price',
        ];
    }
}
