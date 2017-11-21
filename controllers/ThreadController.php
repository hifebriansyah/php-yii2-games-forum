<?php

namespace app\controllers;

use Yii;

class ThreadController extends MainController
{
	/**
     * Displays index.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index.tpl', $this->vars);
    }
}