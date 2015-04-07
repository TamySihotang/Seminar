<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "member".
 *
 * @property integer $id
 * @property string $first_name
 * @property string $last_name
 * @property string $username
 * @property string $auth_key
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $jenis_kelamin
 * @property string $birth
 * @property string $email
 * @property string $telepon
 * @property string $foto
 * @property integer $status
 *
 * @property CommentPaper[] $commentPapers
 * @property CostAccumulation[] $costAccumulations
 * @property News[] $news
 * @property Paper[] $papers
 */
class Member extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'member';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['first_name', 'last_name', 'username', 'password_hash', 'jenis_kelamin', 'birth', 'email', 'telepon', 'foto'], 'required'],
            [['status'], 'integer'],
            [['first_name', 'last_name', 'username', 'password_hash', 'password_reset_token', 'jenis_kelamin', 'birth', 'email', 'telepon', 'foto'], 'string', 'max' => 64],
            [['auth_key'], 'string', 'max' => 32]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'username' => 'Username',
            'auth_key' => 'Auth Key',
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
            'jenis_kelamin' => 'Jenis Kelamin',
            'birth' => 'Birth',
            'email' => 'Email',
            'telepon' => 'Telepon',
            'foto' => 'Foto',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCommentPapers()
    {
        return $this->hasMany(CommentPaper::className(), ['member_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCostAccumulations()
    {
        return $this->hasMany(CostAccumulation::className(), ['member_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNews()
    {
        return $this->hasMany(News::className(), ['member_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPapers()
    {
        return $this->hasMany(Paper::className(), ['member_id' => 'id']);
    }
}
