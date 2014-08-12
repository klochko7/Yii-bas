<?php
namespace app\models;

use Yii;

/**
 * This is the model class for table "results".
 *
 * @property integer $id_result
 * @property integer $num
 * @property integer $counts
 * @property integer $id_exp
 *
 * @property Experiment $idExp
 */
class Results extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'results';
    }
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['num', 'counts', 'id_exp'], 'required'],
            [['num', 'counts', 'id_exp'], 'integer']
        ];
    }
    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_result' => 'Id Result',
            'num' => 'Num',
            'counts' => 'Counts',
            'id_exp' => 'Id Exp',
        ];
    }
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdExp()
    {
        return $this->hasOne(Experiment::className(), ['id_exp' => 'id_exp']);
    }
}
