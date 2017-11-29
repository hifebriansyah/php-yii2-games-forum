<?php

/**
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
use app\models\ThreadComment;

/**
 * Thread comment model tests.
 *
 * @author Muhammad Febriansyah <hifebriansyah@gmail.com>
 *
 * @since Class available since Release 1.0.0
 */
class ThreadCommentTest extends PHPUnit_Framework_TestCase
{
    /**
     * Test model.
     *
     * @var \app\models\ThreadComment
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
    private $tableName = 'thread_comments';

    /**
     * ThreadComment test constructor.
     *
     * Initialize model.
     *
     * @since Method available since Release 1.0.0
     */
    public function __construct()
    {
        $this->model = new ThreadComment();
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
}
