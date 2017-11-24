<?php

/**
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace app\controllers;

use Yii;
use yii\web\Controller;

/**
 * Abstraction for controllers.
 *
 * @author Muhammad Febriansyah <hifebriansyah@gmail.com>
 *
 * @since Abstract Class available since Release 1.0.0
 */
abstract class MainController extends Controller
{
    /**
     * disabled default layout.
     *
     * @var bool
     *
     * @since Property available since Release 1.0.0
     */
    public $layout = false;

    /**
     * variables container pass to view.
     *
     * @var array
     *
     * @since Property available since Release 1.0.0
     */
    public $vars = array();

    /**
     * Class Constructor.
     *
     * * set baseUrl;
     *
     * @param yii\base\InlineAction $event
     *
     * @return bool
     *
     * @since Method available since Release 1.0.0
     */
    public function beforeAction($event)
    {
        $this->vars['baseUrl'] = Yii::getAlias('@web');

        return parent::beforeAction($event);
    }
}
