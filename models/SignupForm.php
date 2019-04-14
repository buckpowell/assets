<?php
 
namespace app\models;
 
use Yii;
use yii\base\Model;
 
/**
 * Signup form
 */
class SignupForm extends Model
{
    public $username;
    public $password;
	public $first_name;
	public $mi;
	public $last_name;
	public $suffix;
 
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['username', 'trim'],
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => '\app\models\User', 'message' => 'This username has already been taken.'],
            ['username', 'string', 'min' => 2, 'max' => 255],
            ['password', 'required'],
            ['password', 'string', 'min' => 6],
			['first_name', 'string', 'max' => 45],
			['mi', 'string', 'max' => 2],
			['last_name', 'string', 'max' => 45],
			['suffix', 'string', 'max' => 45],

        ];
    }
 
 /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'password' => 'Password',
            'password_confirm' => 'Confirm Password',
            'first_name' => 'First Name',
			'mi' => 'Middle Initial',
			'last_name' => 'Last Name',
			'suffix' => 'Suffix',
        ];
    }
 
    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
 
        if (!$this->validate()) {
            return null;
        }
 
        $user = new User();
        $user->username = $this->username;
        $user->setPassword($this->password);
		$user->first_name = $this->first_name;
		$user->mi = $this->mi;
		$user->last_name = $this->last_name;
		$user->suffix = $this->suffix;
        $user->generateAuthKey();
        return $user->save() ? $user : null;
    }
	
	
}