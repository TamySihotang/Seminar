<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "comment_paper".
 *
 * @property integer $id_comment
 * @property integer $user_id
 * @property integer $paper_id
 * @property string $content
 *
 * @property User $user
 * @property Paper $paper
 */
class CommentPaper extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'comment_paper';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'paper_id', 'content'], 'required'],
            [['user_id', 'paper_id'], 'integer'],
            [['content'], 'string', 'max' => 64]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_comment' => 'Id Comment',
            'user_id' => 'User ID',
            'paper_id' => 'Paper ID',
            'content' => 'Content',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPaper()
    {
        return $this->hasOne(Paper::className(), ['id_paper' => 'paper_id']);
    }
}
