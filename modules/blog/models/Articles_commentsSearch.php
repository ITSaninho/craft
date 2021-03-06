<?php

namespace app\modules\blog\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\blog\models\Articles_comments;

/**
 * Articles_commentsSearch represents the model behind the search form about `app\modules\blog\models\Articles_comments`.
 */
class Articles_commentsSearch extends Articles_comments
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'data', 'public'], 'integer'],
            [['articles_id', 'text'], 'safe'],
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
        $query = Articles_comments::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
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
            'data' => $this->data,
            'public' => $this->public,
        ]);

        $query->andFilterWhere(['like', 'articles_id', $this->articles_id])
            ->andFilterWhere(['like', 'text', $this->text]);

        return $dataProvider;
    }
}
