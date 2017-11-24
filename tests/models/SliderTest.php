<?php

/**
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
use app\models\Slider;

/**
 * Slider model tests.
 *
 * @author Muhammad Febriansyah <hifebriansyah@gmail.com>
 *
 * @since Class available since Release 1.0.0
 */
class SliderTest extends PHPUnit_Framework_TestCase
{
    private $model;
    private $data;
    private $tableName = 'sliders';

    /**
     * Slider test constructor.
     *
     * Initialize model,
     * Initialize data.
     *
     * @since Method available since Release 1.0.0
     */
    public function __construct()
    {
        $this->model = new Slider();
        $this->data = include \Yii::$app->params['dataPath'].'/'.$this->tableName.'.php';
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
     * Test validity of available data.
     *
     * @since Method available since Release 1.0.0
     */
    public function testValidFetchAll()
    {
        $models = $this->model->fetchAll();

        $this->assertEquals(count($models[0]), 4);

        $this->assertEquals($models[0]['id'], 1);
        $this->assertEquals($models[0]['title'], $this->data[0]['title']);
        $this->assertEquals($models[0]['content'], $this->data[0]['content']);
        $this->assertEquals($models[0]['image_url'], $this->data[0]['image_url']);

        $this->assertEquals($models[1]['id'], 2);
        $this->assertEquals($models[1]['title'], $this->data[1]['title']);
        $this->assertEquals($models[1]['content'], $this->data[1]['content']);
        $this->assertEquals($models[1]['image_url'], $this->data[1]['image_url']);
    }
}
