<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Code';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
	<h1><?= Html::encode($this->title) ?></h1>
	<div class="row">
		<div class="col-lg-7 col-lg-offset-3 ">
			<table class="table table-hover">
				<caption>table title and/or explanatory text</caption>
				<thead>
					<tr>
						<th>Verb</th>
						<th>Description</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><a href="<?=Yii::$app->urlManager->createUrl('student/get')?>">GET</a></td>
						<td><p>-----</p></td>
					</tr>
					<tr>
						<td><a href="<?=Yii::$app->urlManager->createUrl('student/post')?>">POST</a></td>
						<td><p>suggest to use post-data or x-www-form-urlencoded</p></td>
					</tr>
					<tr>
						<td><a href="<?=Yii::$app->urlManager->createUrl('student/put')?>">PUT</a></td>
						<td><p>suggest to use post-data or x-www-form-urlencoded</p></td>
					</tr>
					<tr>
						<td><a href="<?=Yii::$app->urlManager->createUrl('student/delete')?>">DELETE</a></td>
						<td><p>suggest to use post-data or x-www-form-urlencoded</p></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>

	<?php 
	Yii::$app->sc->collect('php', Yii::$app->sc->getFunctionFromFile(
		'public function scenarios', Yii::getAlias('@app/models/Student.php')
		), false, false
	);

	Yii::$app->sc->collect('php', Yii::$app->sc->getFunctionFromFile(
		'public function actionGet', Yii::getAlias('@app/controllers/StudentController.php')
		), false, false
	);

	Yii::$app->sc->collect('php', Yii::$app->sc->getFunctionFromFile(
		'public function actionPost', Yii::getAlias('@app/controllers/StudentController.php')
		), false, false
	);

	Yii::$app->sc->collect('php', Yii::$app->sc->getFunctionFromFile(
		'public function actionPut', Yii::getAlias('@app/controllers/StudentController.php')
		), false, false
	);

	Yii::$app->sc->collect('php', Yii::$app->sc->getFunctionFromFile(
		'public function actionDelete', Yii::getAlias('@app/controllers/StudentController.php')
		), false, false
	);

	Yii::$app->sc->renderSourceBox();
	?>
</div>
