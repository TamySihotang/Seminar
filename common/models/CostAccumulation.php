<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "cost_accumulation".
 *
 * @property integer $id_accumulation
 * @property integer $user_id
 * @property integer $paper_id
 * @property integer $cost_id
 * @property string $item
 * @property string $item_cost
 * @property string $total
 * @property string $due_date
 * @property string $status
 *
 * @property User $user
 * @property Cost $cost
 * @property Paper $paper
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
            [['user_id', 'paper_id', 'cost_id', 'item', 'item_cost', 'total', 'due_date', 'status'], 'required'],
            [['user_id', 'paper_id', 'cost_id'], 'integer'],
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
            'id_accumulation' => 'Id Accumulation',
            'user_id' => 'User ID',
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
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCost()
    {
        return $this->hasOne(Cost::className(), ['id_cost' => 'cost_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPaper()
    {
        return $this->hasOne(Paper::className(), ['id_paper' => 'paper_id']);
    }
}
