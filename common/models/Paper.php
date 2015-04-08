<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "paper".
 *
 * @property integer $id_paper
 * @property integer $user_id
 * @property string $pre_paper
 * @property string $final_paper
 * @property string $status
 * @property string $modified_time
 *
 * @property CommentPaper[] $commentPapers
 * @property CostAccumulation[] $costAccumulations
 * @property User $user
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
            [['user_id', 'pre_paper', 'final_paper', 'status', 'modified_time'], 'required'],
            [['user_id'], 'integer'],
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
            'id_paper' => 'Id Paper',
            'user_id' => 'User ID',
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
        return $this->hasMany(CommentPaper::className(), ['paper_id' => 'id_paper']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCostAccumulations()
    {
        return $this->hasMany(CostAccumulation::className(), ['paper_id' => 'id_paper']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
