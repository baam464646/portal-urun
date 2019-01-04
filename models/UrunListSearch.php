<?php

namespace kouosl\Urun\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use kouosl\Urun\models\UrunList;

/**
 * UrunListSearch represents the model behind the search form of `kouosl\Urun\models\UrunList`.
 */
class UrunListSearch extends UrunList
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID', 'Urun_ID', 'Stock_ID', 'Stock_Sayisi'], 'integer'],
            [['Urun_Tipi'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = UrunList::find();

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
            'ID' => $this->ID,
            'Urun_ID' => $this->Urun_ID,
            'Stock_ID' => $this->Stock_ID,
            'Stock_Sayisi' => $this->Stock_Sayisi,
        ]);

        $query->andFilterWhere(['like', 'Urun_Tipi', $this->Urun_Tipi]);

        return $dataProvider;
    }
}
