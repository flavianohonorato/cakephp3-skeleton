<?php

use Phinx\Migration\AbstractMigration;

class CreateUsersTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function up()
    {
        $table = $this->table('users');
        $table->addColumn('name', 'string', [
            'default'   => null,
            'limit'     => 255,
            'null'      => false,
        ]);

        $table->addColumn('email','string', [
            'default'   => null,
            'limit'     => 150,
            'null'      => false,
        ]) ->addIndex(['email'], ['unique' => true]);

        $table->addColumn('status', 'integer', ['default' => 1]);

        $table->addColumn('password', 'string', [
            'default'   => null,
            'limit'     => 255,
            'null'      => false,
        ]);

        $table->addColumn('role_id', 'integer', [
            'default'   => null,
            'limit'     => 11,
            'null'      => false,
        ]);
        $table->addColumn('created', 'timestamp', [
            'default'   => null,
            'limit'     => null,
            'null'      => true,
        ]);
        $table->addColumn('modified', 'timestamp', [
            'default'   => null,
            'limit'     => null,
            'null'      => true,
        ]);

        $table->create();
    }

    public function down()
    {
        $this->dropTable('users');
    }
}
