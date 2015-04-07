<?php

namespace common\models\News;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property integer $id
 * @property integer $member_id
 * @property string $date
 * @property string $title
 * @property string $content
 *
 * @property Member $member
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['member_id', 'date', 'title', 'content'], 'required'],
            [['member_id'], 'integer'],
            [['date'], 'safe'],
            [['title', 'content'], 'string', 'max' => 64]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'member_id' => 'Member ID',
            'date' => 'Date',
            'title' => 'Title',
            'content' => 'Content',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMember()
    {
        return $this->hasOne(Member::className(), ['id' => 'member_id']);
    }
}
