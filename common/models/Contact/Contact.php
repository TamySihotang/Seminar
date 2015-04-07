<?php

namespace common\models\Contact;

use Yii;

/**
 * This is the model class for table "contact".
 *
 * @property integer $id
 * @property string $title
 * @property string $email
 * @property string $web
 * @property string $phone
 */
class Contact extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'contact';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'email', 'web', 'phone'], 'required'],
            [['title', 'email', 'web', 'phone'], 'string', 'max' => 64]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'email' => 'Email',
            'web' => 'Web',
            'phone' => 'Phone',
        ];
    }
}
