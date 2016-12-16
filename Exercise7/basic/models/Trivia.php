<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "trivia".
 *
 * @property integer $id
 * @property string $questions
 * @property string $answer
 */
class Trivia extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'trivia';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'questions', 'answer'], 'required'],
            [['questions', 'answer'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'questions' => 'Questions',
            'answer' => 'Answer',
        ];
    }


  public function randomNumber()
{
    //for generating random number
    $length =1;
    $chars = array_merge(range(0,9));
    shuffle($chars);
    $id = implode(array_slice($chars, 0,$length));
    echo $id;

}
}
