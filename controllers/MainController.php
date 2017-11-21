<?php

namespace app\controllers;

use Yii;

use yii\web\Controller;

abstract class MainController extends Controller
{
	public $layout = false;
    public $vars = array();

    public function beforeAction($event)
    {
        $this->vars['baseUrl'] = Yii::getAlias('@web');
        return parent::beforeAction($event);
    }
}