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
 * @property string $created_at
 
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
            [['date', 'created_at'], 'safe'],
            [['first_name', 'last_name', 'suffix'], 'string', 'max' => 45],
            [['mi'], 'string', 'max' => 2],
            [['password'], 'string', 'max' => 100],
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
            'mi' => 'MI',
            'last_name' => 'Last Name',
            'suffix' => 'Suffix',
			'address' => 'Address',
			'city' => 'City',
			'us_state' => 'State',
			'zip' => 'Zipcode',
			'phone' => 'Phone',
			'business_phone' => 'Business Phone',
			'ssn' => 'SSN',
			'dob' => 'Birth Date'

        ];
    }

}
