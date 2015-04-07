<?php

namespace common\models\Cost;

use Yii;

/**
 * This is the model class for table "cost".
 *
 * @property integer $id
 * @property string $accomodation
 * @property string $register
 *
 * @property CostAccumulation[] $costAccumulations
 */
class Cost extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cost';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['accomodation', 'register'], 'required'],
            [['accomodation', 'register'], 'string', 'max' => 64]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'accomodation' => 'Accomodation',
            'register' => 'Register',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCostAccumulations()
    {
        return $this->hasMany(CostAccumulation::className(), ['cost_id' => 'id']);
    }
}
