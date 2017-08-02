<?php

namespace app\models;

use Yii;

class Student extends \yii\db\ActiveRecord
{

  const SCENARIO_CREATE = 'create';

  public static function tableName()
  {
    return 'student';
}

public function rules()
{
    return [
    [['ID', 'Name', 'Last_Name', 'Email'], 'required'],
    [['ID'], 'integer'],
    [['Name', 'Last_Name'], 'string', 'max' => 40],
    [['Email'], 'string', 'max' => 255],
    ];
}

public function scenarios()
{
    $scenarios = parent::scenarios();
    $scenarios['create'] = ['Name','Last_Name','Email']; 
    return $scenarios; 
}

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
        'ID' => 'ID',
        'Name' => 'Name',
        'Last_Name' => 'Last  Name',
        'Email' => 'Email',
        ];
    }
}
