<?php

namespace app\controllers;

use libs\GiantBomb;

class ThreadController extends MainController
{
    /**
     * Displays index.
     *
     * @return string
     */
    public function actionIndex()
    {
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

        return GiantBomb::scrapGamesByTitles($_GET['title']);
        //die();
        //return $this->render('index.tpl', $this->vars);
    }
}
