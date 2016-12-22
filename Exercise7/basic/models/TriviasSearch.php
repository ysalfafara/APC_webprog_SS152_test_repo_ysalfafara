<?php
namespace app\models;
use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TriviasModel;
use yii\db\Expression;
/**
 * TriviasSearch represents the model behind the search form about `app\models\TriviasModel`.
 */
class TriviasSearch extends TriviasModel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['question', 'answer'], 'safe'],
        ];
    }
    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }
    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
		
        $query = TriviasModel::find()
		->orderBy(new Expression('rand()'))
		->limit(5);
        // add conditions that should always apply here
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
			'pagination' => false,
        ]);
        $this->load($params);
        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }
        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
        ]);
        $query->andFilterWhere(['like', 'question', $this->question])
            ->andFilterWhere(['like', 'answer', $this->answer]);
        return $dataProvider;
    }
}