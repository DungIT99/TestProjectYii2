<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
class Mycart extends Model
{
    public $name;
    public $email;
    public $snipping_method;
    public $payment_method;
    public $address;
    public $phone;
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
        [['name', 'email', 'snipping_method', 'payment_method','address'], 'required','message'=>'{attribute} không được để trống'],
        [['name', 'snipping_method', 'payment_method','address'],'string'],
        ['phone','integer']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Họ tên',
            'email'=>'Email',
            'snipping_method'=>'Phương thức vận chuyển',
            'payment_method'=>'Phương thức thanh toán',
            'phone'=>'Số điện thoại',
            'address'=>'Dịa chỉ'
        ];
    }

    /**
     * @param string $email the target email address
     * @return bool whether the email was sent
     */
    // public function sendEmail($email)
    // {
    //     return Yii::$app->mailer->compose()
    //         ->setTo($email)
    //         ->setFrom([Yii::$app->params['senderEmail'] => Yii::$app->params['senderName']])
    //         ->setReplyTo([$this->email => $this->name])
    //         ->setSubject($this->subject)
    //         ->setTextBody($this->body)
    //         ->send();
    // }
}
