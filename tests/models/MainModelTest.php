<?php

/**
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
use app\models\MainModel;

/**
 * MainModel model tests.
 *
 * @author Muhammad Febriansyah <hifebriansyah@gmail.com>
 *
 * @since Class available since Release 1.0.0
 */
class MainModelTest extends PHPUnit_Framework_TestCase
{
    /**
     * Test model.
     *
     * @var \app\models\MainModel
     *
     * @since Property available since Release 1.0.0
     */
    private $model;

    /**
     * MainModel test constructor.
     *
     * Initialize model,
     *
     * @since Method available since Release 1.0.0
     */
    public function __construct()
    {
        $this->model = new MainModel();
    }

    /**
     * Test validity of available constants.
     */
    public function testValidConstants()
    {
        // tackles problem when access $this->model::const direcly.
        $class = $this->model;

        $this->assertEquals($class::STATUS_ACTIVE, 1);
        $this->assertEquals($class::STATUS_INACTIVE, 0);
    }
}
