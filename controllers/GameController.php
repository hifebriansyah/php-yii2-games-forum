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

    /**
     * Displays detail.
     *
     * @return string
     */
    public function actionDetail($url)
    {
        $this->vars['game'] = Game::find()->where(['like', 'source_url', $url])->one();

        return $this->render('detail.tpl', $this->vars);
    }
}
