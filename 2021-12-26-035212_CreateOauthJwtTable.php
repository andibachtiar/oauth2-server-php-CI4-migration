<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateOauthJwtTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'client_id' => [
                'type' => 'varchar', 'constraint' => '80', 'not_null' => true
            ],
            'subject' => [
                'type' => 'varchar', 'constraint' => '80'
            ],
            'public_key' => [
                'type' => 'varchar', 'constraint' => '2000', 'not_null' => true
            ]
        ]);
        $this->forge->addKey('username', true);
        $this->forge->createTable('oauth_jwt');
    }

    public function down()
    {
        $this->forge->dropTable('oauth_jwt');
    }
}
