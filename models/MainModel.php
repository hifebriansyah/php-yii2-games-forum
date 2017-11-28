<?php

/**
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace app\models;

/**
 * Abstraction for models.
 *
 * @author Muhammad Febriansyah <hifebriansyah@gmail.com>
 *
 * @since Abstract Class available since Release 1.0.0
 */
class MainModel extends \yii\db\ActiveRecord
{
    /**
     * status_id label for id = 1.
     *
     * @var int
     *
     * @since Property available since Release 1.0.0
     */
    const STATUS_ACTIVE = 1;

    /**
     * status_id label for id = 0.
     *
     * @var int
     *
     * @since Property available since Release 1.0.0
     */
    const STATUS_INACTIVE = 0;

    /**
     * label for code = 1.
     *
     * @var int
     *
     * @since Property available since Release 1.0.0
     */
    const SUCCESS = 1;
}
