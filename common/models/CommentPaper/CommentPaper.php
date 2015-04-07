<?php

namespace common\models\CommentPaper;

use Yii;

/**
 * This is the model class for table "comment_paper".
 *
 * @property integer $id
 * @property integer $member_id
 * @property integer $paper_id
 * @property string $content
 *
 * @property Member $member
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
            [['member_id', 'paper_id', 'content'], 'required'],
            [['member_id', 'paper_id'], 'integer'],
            [['content'], 'string', 'max' => 64]
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
            'paper_id' => 'Paper ID',
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

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPaper()
    {
        return $this->hasOne(Paper::className(), ['id' => 'paper_id']);
    }
}
