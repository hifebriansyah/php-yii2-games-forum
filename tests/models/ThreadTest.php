<?php

/**
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
use app\models\Thread;

/**
 * Thread model tests.
 *
 * @author Muhammad Febriansyah <hifebriansyah@gmail.com>
 *
 * @since Class available since Release 1.0.0
 */
class ThreadTest extends PHPUnit_Framework_TestCase
{
    /**
     * Test model.
     *
     * @var \app\models\Thread
     *
     * @since Property available since Release 1.0.0
     */
    private $model;

    /**
     * Test table name.
     *
     * @var string
     *
     * @since Property available since Release 1.0.0
     */
    private $tableName = 'threads';

    /**
     * Thread test constructor.
     *
     * Initialize model.
     *
     * @since Method available since Release 1.0.0
     */
    public function __construct()
    {
        $this->model = new Thread();
    }

    /**
     * Test validity of table name.
     *
     * @since Method available since Release 1.0.0
     */
    public function testValidTableName()
    {
        $this->assertEquals($this->model->tableName(), $this->tableName);
    }

    /**
     * Test an array rules is exist.
     *
     * @since Method available since Release 1.0.0
     */
    public function testRulesExist()
    {
        $this->assertTrue(is_array($this->model->rules()));
    }

    /**
     * Test validity of result keys.
     *
     * @todo set fixture to assert equals
     *
     * @since Method available since Release 1.0.0
     */
    public function testValidFetchPopular()
    {
        $models = $this->model->fetchPopular();

        $this->assertEquals(count($models[0]), 11);

        $this->assertArrayHasKey('title', $models[0]);
        $this->assertArrayHasKey('content', $models[0]);
        $this->assertArrayHasKey('created_at', $models[0]);
        $this->assertArrayHasKey('source_url', $models[0]);
        $this->assertArrayHasKey('game_title', $models[0]);
        $this->assertArrayHasKey('platform', $models[0]);
        $this->assertArrayHasKey('image_url', $models[0]);
        $this->assertArrayHasKey('email', $models[0]);
        $this->assertArrayHasKey('user_id', $models[0]);
        $this->assertArrayHasKey('title', $models[0]);
        $this->assertArrayHasKey('platform', $models[0]);
    }
}
