<?php

/**
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
use \libs\Cache;

/**
 * Cache lib tests.
 *
 * @author Muhammad Febriansyah <hifebriansyah@gmail.com>
 *
 * @todo Need to do methods tests
 *
 * @since Class available since Release 1.0.0
 */
class CacheTest extends PHPUnit_Framework_TestCase
{
    /**
     * Test lib.
     *
     * @var \app\libs\Cache
     *
     * @since Property available since Release 1.0.0
     */
    private $lib;

    /**
     * Test lib name.
     *
     * @var string
     *
     * @since Property available since Release 1.0.0
     */
    private $libName;

    /**
     * Cache test constructor.
     *
     * Initialize lib,
     *
     * @since Method available since Release 1.0.0
     */
    public function __construct()
    {
        $this->lib = new Cache();
        $this->libName = get_class($this->lib);
    }

    /**
     * Test validity of available constants.
     */
    public function testValidConstants()
    {
        // tackles problem when access $this->lib::const direcly.
        $class = $this->lib;

        $this->assertEquals($class::ONE_DAY, 8600);
        $this->assertEquals($class::ONE_HOUR, 3600);
    }

    /**
     * Test all needed atributes are exist.
     */
    public function testAttributesExist()
    {
        $this->assertClassHasAttribute('redis', $this->libName);
    }
}
