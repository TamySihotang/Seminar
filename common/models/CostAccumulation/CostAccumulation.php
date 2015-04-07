<?php

namespace common\models\CostAccumulation;

use Yii;

/**
 * This is the model class for table "cost_accumulation".
 *
 * @property integer $id
 * @property integer $member_id
 * @property integer $paper_id
 * @property integer $cost_id
 * @property string $item
 * @property string $item_cost
 * @property string $total
 * @property string $due_date
 * @property string $status
 *
 * @property Member $member
 * @property Paper $paper
 * @property Cost $cost
 */
class CostAccumulation extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cost_accumulation';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['member_id', 'paper_id', 'cost_id', 'item', 'item_cost', 'total', 'due_date', 'status'], 'required'],
            [['member_id', 'paper_id', 'cost_id'], 'integer'],
            [['due_date'], 'safe'],
            [['item', 'item_cost', 'total', 'status'], 'string', 'max' => 64]
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
            'cost_id' => 'Cost ID',
            'item' => 'Item',
            'item_cost' => 'Item Cost',
            'total' => 'Total',
            'due_date' => 'Due Date',
            'status' => 'Status',
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

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCost()
    {
        return $this->hasOne(Cost::className(), ['id' => 'cost_id']);
    }
}
