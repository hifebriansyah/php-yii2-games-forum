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
class m300000_000000_thread_comments extends Migration
{
    /**
     * migration table name.
     *
     * @var string
     *
     * @since Property available since Release 1.0.0
     */
    public $table = "thread_comments";

    /**
     * @inheritdoc
     */
    public function Up()
    {
        // structure
        $this->createTable($this->table, [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'thread_id' => $this->integer()->notNull(),
            'content' => $this->text(),
            'created_at' => $this->timestamp()->defaultValue(null),
            'updated_at' => $this->timestamp()->defaultValue(null),
            'status_id' => $this->integer()->defaultValue(1),
        ]);

        // timestamp
        $this->execute("ALTER TABLE `".$this->table."` CHANGE `created_at` `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP;");
        $this->execute("ALTER TABLE `".$this->table."` CHANGE `updated_at` `updated_at` TIMESTAMP on update CURRENT_TIMESTAMP NULL DEFAULT NULL;");

        // add foreign key for table `users`
        $this->addForeignKey(
            'fk-thread-comment-thread_id',
            'thread_comments',
            'thread_id',
            'threads',
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
