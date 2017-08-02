<?php

/* @var $this yii\web\View */

$this->title = 'Rest API';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>REST API</h1>
        <p class="lead">Simple RESTful API powered with Yii2</p>
        <p><a class="btn btn-lg btn-success" href="<?=Yii::$app->urlManager->createUrl('student/get')?>">Try it</a></p>
    </div>

    <div class="body-content">
        <div class="row">
            <div class="col-lg-7 col-lg-offset-3 ">
                <table class="table table-hover">
                <caption>List of verbs available</caption>
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
                            <td><a href="<?=Yii::$app->urlManager->createUrl('student/put')?>">POST</a></td>
                            <td><p>suggest to use post-data or x-www-form-urlencoded</p></td>
                        </tr>
                        <tr>
                            <td><a href="<?=Yii::$app->urlManager->createUrl('student/create')?>">PUT</a></td>
                            <td><p>suggest to use post-data or x-www-form-urlencoded</p></td>
                        </tr>
                        <tr>
                            <td><a href="<?=Yii::$app->urlManager->createUrl('student/create')?>">DELETE</a></td>
                            <td><p>suggest to use post-data or x-www-form-urlencoded</p></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
