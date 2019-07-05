<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "books".
 *
 * @property int $id
 * @property string $name
 * @property string $image
 * @property int $cate
 * @property string $author
 * @property int $page
 * @property string $slug
 * @property int $status
 * @property int $publish_at
 * @property int $created_at
 * @property int $updated_at
 */
class books extends \yii\db\ActiveRecord
{
    public $file;
    public $qtt;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'books';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'publish_at','cate','slug', 'page', 'status', 'publish_at', 'created_at', 'updated_at'], 'required','message'=>'{attribute} khong dc de trong'],
            [['cate', 'page', 'status', 'publish_at', 'created_at', 'updated_at'], 'integer'],
            [['name', 'image', 'author', 'slug'], 'string', 'max' => 255],
            [['name'], 'unique'],
            [['file'],'file','extensions'=>'png,jpg,gif'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'tên sách',
            'image' => 'hình ảnh',
            'cate' => 'lạo sách',
            'author' => 'tác giả',
            'page' => 'số trang',
            'slug' => 'mô tả',
            'status' => 'trạng thái',
            'publish_at' => 'xuất bản',
            'created_at' => 'ngày nhập',
            'updated_at' => 'ngày update',
        ];
    }
  
}
