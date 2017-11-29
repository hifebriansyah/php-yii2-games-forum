<?php

/**
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use yii\db\Migration;

/**
 * Thread migrator.
 *
 * @author Muhammad Febriansyah <hifebriansyah@gmail.com>
 *
 * @since Class available since Release 1.0.0
 */
class m200000_000000_threads extends Migration
{
    /**
     * migration table name.
     *
     * @var string
     *
     * @since Property available since Release 1.0.0
     */
    public $table = "threads";

    /**
     * @inheritdoc
     */
    public function Up()
    {
        // structure
        $this->createTable($this->table, [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'game_id' => $this->integer()->notNull(),
            'title' => $this->string(80)->notNull(),
            'content' => $this->string(80),
            'created_at' => $this->timestamp()->defaultValue(null),
            'updated_at' => $this->timestamp()->defaultValue(null),
            'status_id' => $this->integer()->defaultValue(1),
        ]);

        // timestamp
        $this->execute("ALTER TABLE `".$this->table."` CHANGE `created_at` `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP;");
        $this->execute("ALTER TABLE `".$this->table."` CHANGE `updated_at` `updated_at` TIMESTAMP on update CURRENT_TIMESTAMP NULL DEFAULT NULL;");

        // add foreign key for table `users`
        $this->addForeignKey(
            'fk-thread-user_id',
            'threads',
            'user_id',
            'users',
            'id',
            'CASCADE'
        );

        // add foreign key for table `games`
        $this->addForeignKey(
            'fk-thread-game_id',
            'threads',
            'game_id',
            'games',
            'id',
            'CASCADE'
        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable($this->table);
    }
}
