<?php
namespace frontend\models;

use common\models\User;
use yii\base\Model;
use Yii;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $username;
    public $email;
    public $password;
<<<<<<< HEAD
    public $first_name;
    public $last_name;
    public $gender;
    public $birth;
    public $phone;
    public $image;
=======
>>>>>>> 76c58ee72437bc4331656780392cdf747a010500

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['username', 'filter', 'filter' => 'trim'],
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This username has already been taken.'],
            ['username', 'string', 'min' => 2, 'max' => 255],
<<<<<<< HEAD
            
            ['password', 'required'],
            ['password', 'string', 'min' => 6],
            
=======

>>>>>>> 76c58ee72437bc4331656780392cdf747a010500
            ['email', 'filter', 'filter' => 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This email address has already been taken.'],
<<<<<<< HEAD
            
            ['firstname', 'filter', 'filter' => 'trim'],
            ['firstname', 'required'],
            ['firstname', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This firstname has already been taken.'],
            ['firstname', 'string', 'min' => 2, 'max' => 64],

            ['lastname', 'filter', 'filter' => 'trim'],
            ['lastname', 'required'],
            ['lastname', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This lastname has already been taken.'],
            ['lastname', 'string', 'min' => 2, 'max' => 64],
            
            ['gender', 'filter', 'filter' => 'trim'],
            ['gender', 'required'],
            ['gender', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This gender has already been taken.'],
            ['gender', 'string', 'min' => 2, 'max' => 64],
            
            ['birth', 'filter', 'filter' => 'trim'],
            ['birth', 'required'],
            ['birth', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This birth has already been taken.'],
            ['birth', 'date'],
            
            ['phone', 'filter', 'filter' => 'trim'],
            ['phone', 'required'],
            ['phone', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This phone has already been taken.'],
          //  ['phone', 'int', 'min' => 5, 'max' => 64],
            
            ['image', 'filter', 'filter' => 'trim'],
            ['image', 'required'],
            ['image', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This image has already been taken.'],
            ['image', 'string', 'min' => 2, 'max' => 64],
=======

            ['password', 'required'],
            ['password', 'string', 'min' => 6],
>>>>>>> 76c58ee72437bc4331656780392cdf747a010500
        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
        if ($this->validate()) {
            $user = new User();
            $user->username = $this->username;
<<<<<<< HEAD
            $user->setPassword($this->password);
            $user->generateAuthKey();
            $user->email = $this->email;
            $user->first_name = $this->first_name;
            $user->last_name = $this->last_name;
            $user->gender = $this->gender;
            $user->birth = $this->birth;
            $user->phone = $this->phone;
            $user->image = $this->image;
=======
            $user->email = $this->email;
            $user->setPassword($this->password);
            $user->generateAuthKey();
>>>>>>> 76c58ee72437bc4331656780392cdf747a010500
            if ($user->save()) {
                return $user;
            }
        }

        return null;
    }
}
