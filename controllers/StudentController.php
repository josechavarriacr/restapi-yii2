<?php

namespace app\controllers;
use app\models\Student;

class StudentController extends \yii\web\Controller
{
	public $enableCsrfValidation = false;

	public function actionGet()
	{
		\Yii::$app->response->format = \yii\web\Response:: FORMAT_JSON;
		$student = Student::find()->all();
		if(count($student) > 0 ){
			return array('status' => true, 'data'=> $student);
		}else{
			return array('status'=>false,'data'=> 'No Student Found');
		}
	}

	public function actionPost()
	{
		\Yii::$app->response->format = \yii\web\Response:: FORMAT_JSON;
		$student = new Student();
		$student->scenario = Student::SCENARIO_CREATE;
		$student->attributes = \yii::$app->request->post();

		if($student->validate()){
			$student->save(false);
			return array('status' => true, 'data'=> 'Student record is successfully updated');
		}else{
			return array('status'=>false,'data'=>$student->getErrors());    
		}
	}

	public function actionPut()
	{
		\Yii::$app->response->format = \yii\web\Response:: FORMAT_JSON;     
		$attributes = \yii::$app->request->post();
		$student = Student::find()->where(['ID' => $attributes['id']])->one();

		if(count($student) > 0 ){
			$student->attributes = \yii::$app->request->post();
			$student->save();
			return array('status' => true, 'data'=> 'Student record is updated successfully');
		}else{
			return array('status'=>false,'data'=> 'No Student Found');
		}
	}

	public function actionDelete() 
	{ 
		\Yii::$app->response->format = \yii\web\Response:: FORMAT_JSON;
		$attributes = \yii::$app->request->post();
		$student = Student::find()->where(['ID' => $attributes['id'] ])->one();  

		if(count($student) > 0 ){
			$student->delete();
			return array('status' => true, 'data'=> 'Student record is successfully deleted'); 
		}else{
			return array('status'=>false,'data'=> 'No Student Found');
		}
	}

}
