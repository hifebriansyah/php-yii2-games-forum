<?php

/**
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace app\controllers;

use Yii;
use app\models\Game;
use app\models\Slider;
use app\models\Thread;

/**
 * Controller for common site pages.
 *
 * @author Muhammad Febriansyah <hifebriansyah@gmail.com>
 *
 * @since Class available since Release 1.0.0
 */
class SiteController extends MainController
{
    /**
     * Displays homepage.
     *
     * @return string
     *
     * @since Method available since Release 1.0.0
     */
    public function actionIndex()
    {
        $this->vars['sliders'] = Slider::fetchAll();
        $this->vars['popularGames'] = Game::fetchPopular();
        $this->vars['popularThreads'] = Thread::fetchPopular();

        return $this->render('index.tpl', $this->vars);
    }

    /**
     * Displays error.
     *
     * @return string
     *
     * @since Method available since Release 1.0.0
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
