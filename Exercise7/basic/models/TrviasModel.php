<?php
namespace app\models;
use Yii;
/**
 * This is the model class for table "trivias".
 *
 * @property integer $id
 * @property string $question
 * @property string $answer
 */
class TriviasModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'trivias';
    }
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['questions', 'answer'], 'required'],
            [['questions', 'answer'], 'string', 'max' => 255],
        ];
    }
    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'questions' => 'Question',
            'answer' => 'Answer',
        ];
    }
}