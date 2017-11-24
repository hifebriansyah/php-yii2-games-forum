<?php

/**
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace libs;

/**
 * Cache library.
 *
 * @author Muhammad Febriansyah <hifebriansyah@gmail.com>
 *
 * @since Class available since Release 1.0.0
 */
class Cache
{
    /**
     * Redis instance.
     *
     * Use to call phpredis built in functions.
     *
     * @var \Redis
     *
     * @since Property available since Release 1.0.0
     */
    public static $redis;

    /**
     * Get redis instance.
     *
     * @return \Redis
     *
     * @since Method available since Release 1.0.0
     */
    public static function redis()
    {
        self::init();

        return self::$redis;
    }

    /**
     * Improve \Redis->set() to set array.
     *
     * @return bool
     *
     * @since Method available since Release 1.0.0
     */
    public static function setArray($key, $array)
    {
        self::init();

        return self::$redis->set($key, json_encode($array));
    }

    /**
     * Improve \Redis->get() to get array.
     *
     * @return array
     *
     * @since Method available since Release 1.0.0
     */
    public static function getArray($key)
    {
        self::init();

        return json_decode(self::$redis->get($key), true);
    }

    /**
     * Init redis connection.
     *
     * Initialize redis if null
     *
     * @since Method available since Release 1.0.0
     */
    private static function init()
    {
        if (is_null(self::$redis)) {
            $redis = new \Redis();

            $redis->connect(
                '127.0.0.1',
                '6379'
            );

            self::$redis = $redis;
        }
    }
}
