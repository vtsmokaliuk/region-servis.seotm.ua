<?php
namespace backend\models;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Menu;

class MenuSearch extends Menu
{
    public function rules()
    {
        return [
            [['id', 'status', 'pos'], 'integer'],
            [['name','key'], 'safe'],
            ['header', 'string'],
        ];
    }

    public function scenarios()
    {
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = Menu::find();
        $query->joinWith('translations');
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        $dataProvider->sort->attributes['header'] = [
            'asc' => [MenuDescription::tableName() . '.header' => SORT_ASC],
            'desc' => [MenuDescription::tableName() . '.header' => SORT_DESC],
        ];
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            return $dataProvider;
        }
        $query->andFilterWhere([
            'id' => $this->id,
            'key' => $this->key,
            'status' => $this->status,
            'name' => $this->name,
            'pos' => $this->pos,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])->andFilterWhere(['like', 'key', $this->key]);
        $query->andFilterWhere(['like',MenuDescription::tableName() . '.header', $this->header]);
              return $dataProvider;
    }
}
