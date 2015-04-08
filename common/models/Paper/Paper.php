<?php

namespace common\models\Paper;

use Yii;

/**
 * This is the model class for table "paper".
 *
 * @property integer $id
 * @property integer $member_id
 * @property string $pre_paper
 * @property string $final_paper
 * @property string $status
 * @property string $modified_time
 *
 * @property CommentPaper[] $commentPapers
 * @property CostAccumulation[] $costAccumulations
 * @property Member $member
 */
class Paper extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'paper';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['member_id', 'pre_paper', 'final_paper', 'status', 'modified_time'], 'required'],
            [['member_id'], 'integer'],
            [['modified_time'], 'safe'],
            [['pre_paper', 'final_paper', 'status'], 'string', 'max' => 64]
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
            'pre_paper' => 'Pre Paper',
            'final_paper' => 'Final Paper',
            'status' => 'Status',
            'modified_time' => 'Modified Time',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCommentPapers()
    {
        return $this->hasMany(CommentPaper::className(), ['paper_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCostAccumulations()
    {
        return $this->hasMany(CostAccumulation::className(), ['paper_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMember()
    {
        return $this->hasOne(Member::className(), ['id' => 'member_id']);
    }
}
