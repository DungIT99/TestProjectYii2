<?php

namespace frontend\models;

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

    
    public function getBookMyCat($id){
        $books  = books::find()->where(['cate' => $id])->all();
            return $books;
    }
    public function getBook(){
        $books  = books::find()->all();
            return $books;
    }
}
