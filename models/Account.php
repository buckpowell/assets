<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $date
 * @property string $first_name
 * @property string $mi
 * @property string $last_name
 * @property string $suffix
 * @property string $address
 * @property string $city
 * @property string $us_state
 * @property string $zip
 * @property string $phone
 * @property string $ssn
 * @property string $dob
 * @property string $username
 * @property string $password
 * @property string $email
 * @property string $password_hash
 * @property string $auth_key
 * @property string $status
 * @property string $created_at
 * @property string $updated_at
 */
class Account extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date', 'dob', 'created_at', 'updated_at'], 'safe'],
			[['dob'], 'date', 'format' => 'php:Y-m-d',],
            [['first_name', 'last_name', 'suffix', 'address', 'city', 'username'], 'string', 'max' => 45],
            [['mi', 'us_state'], 'string', 'max' => 2],
            [['zip'], 'string', 'max' => 10],
            [['phone'], 'string', 'max' => 14],
            [['ssn'], 'string', 'max' => 11],
            [['password_hash', 'auth_key'], 'string', 'max' => 255],
            [['password'], 'string', 'max' => 100],
            [['status'], 'string', 'max' => 3],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'date' => 'Date',
            'first_name' => 'First Name',
            'mi' => 'Mi',
            'last_name' => 'Last Name',
            'suffix' => 'Suffix',
            'address' => 'Address',
            'city' => 'City',
            'us_state' => 'State',
            'zip' => 'Zip',
            'phone' => 'Phone',
            'ssn' => 'SSN',
            'dob' => 'Birth Date',
            'username' => 'Username',
            'password' => 'Password',
            'password_hash' => 'Password Hash',
            'auth_key' => 'Auth Key',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
	
	/**
 * @inheritdoc
 */

	
	public function beforeValidate()
	{
        $this->dob = date('Y-m-d', strtotime($this->dob));
		return parent::beforeValidate();
	}

}
