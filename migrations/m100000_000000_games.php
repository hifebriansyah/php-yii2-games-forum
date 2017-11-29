<?php

/**
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use yii\db\Migration;

/**
 * Game migrator.
 *
 * @author Muhammad Febriansyah <hifebriansyah@gmail.com>
 *
 * @since Class available since Release 1.0.0
 */
class m100000_000000_games extends Migration
{
    /**
     * migration table name.
     *
     * @var string
     *
     * @since Property available since Release 1.0.0
     */
    public $table = "games";

    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable($this->table, [
            'id' => $this->primaryKey(),
            'title' => $this->string(80)->notNull(),
            'content' => $this->text(),
            'release_year' => $this->string(4),
            'platform' => $this->string(255),
            'source_url' => $this->string(255)->notNull(),
            'image_url' => $this->string(255),
            'created_at' => $this->timestamp()->defaultValue(null),
            'updated_at' => $this->timestamp()->defaultValue(null),
            'status_id' => $this->integer()->defaultValue(1),
        ]);

        $this->execute("ALTER TABLE `".$this->table."` CHANGE `created_at` `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP;");
        $this->execute("ALTER TABLE `".$this->table."` CHANGE `updated_at` `updated_at` TIMESTAMP on update CURRENT_TIMESTAMP NULL DEFAULT NULL;");
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable($this->table);
    }
}
