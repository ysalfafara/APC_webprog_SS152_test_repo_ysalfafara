<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property integer $user_id
 * @property string $fname
 * @property string $lname
 * @property string $nickname
 * @property string $email
 * @property string $homeAdd
 * @property string $gender
 * @property string $phoneNum
 * @property string $comment
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fname', 'lname', 'nickname', 'email', 'gender', 'phoneNum'], 'required'],
            [['fname', 'lname', 'nickname', 'email', 'homeAdd', 'gender', 'phoneNum'], 'string', 'max' => 25],
            [['comment'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'User ID',
            'fname' => 'Fname',
            'lname' => 'Lname',
            'nickname' => 'Nickname',
            'email' => 'Email',
            'homeAdd' => 'Home Add',
            'gender' => 'Gender',
            'phoneNum' => 'Phone Num',
            'comment' => 'Comment',
        ];
    }
}
