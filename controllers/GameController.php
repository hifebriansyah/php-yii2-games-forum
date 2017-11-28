<?php

namespace app\controllers;

use app\models\Game;

class GameController extends MainController
{
    /**
     * Displays index.
     *
     * @return string
     */
    public function actionSearch()
    {
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

        return Game::fetchByTitle($_GET['title']);
    }
}
