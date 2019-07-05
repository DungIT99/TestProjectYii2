<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "orders".
 *
 * @property int $id
 * @property int $user_id
 * @property int $status
 * @property int $created_at
 * @property string $snipping_method
 * @property string $payment_method
 */
class Orders extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'orders';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'status', 'created_at'], 'integer'],
            [['created_at', 'snipping_method', 'payment_method'], 'required'],
            [['snipping_method', 'payment_method'], 'string', 'max' => 100],
            [['user_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'status' => 'Status',
            'created_at' => 'Created At',
            'snipping_method' => 'Snipping Method',
            'payment_method' => 'Payment Method',
        ];
    }
}
