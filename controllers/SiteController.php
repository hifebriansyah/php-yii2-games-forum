<?php

namespace app\controllers;

use Yii;

class SiteController extends MainController
{

    /**
     * @inheritdoc
     */
    public function actions()
    {
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $this->vars['hello'] = 'Welcome to Game Central';
        return $this->render('index.tpl', $this->vars);
    }

    /**
     * Displays error.
     *
     * @return string
     */
    public function actionError()
    {
        $exception = Yii::$app->errorHandler->exception;
        
        if ($exception !== null) {
            $this->vars['exception'] = $exception;
        }

        return $this->render('error.tpl', $this->vars);
    }
}
