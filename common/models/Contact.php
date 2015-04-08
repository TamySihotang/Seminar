<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "contact".
 *
 * @property integer $id_contact
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
            'id_contact' => 'Id Contact',
            'title' => 'Title',
            'email' => 'Email',
            'web' => 'Web',
            'phone' => 'Phone',
        ];
    }
}
