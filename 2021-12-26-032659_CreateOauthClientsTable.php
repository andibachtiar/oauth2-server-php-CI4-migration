<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateOauthClientsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'client_id' => [
                'type' => 'varchar', 'constraint' => '80', 'not_null' => true
            ],
            'client_secret' => [
                'type' => 'varchar', 'constraint' => '80'
            ],
            'redirect_uri' => [
                'type' => 'varchar', 'constraint' => '2000'
            ],
            'grant_types' => [
                'type' => 'varchar', 'constraint' => '80'
            ],
            'scope' => [
                'type' => 'varchar', 'constraint' => '4000'
            ],
            'user_id' => [
                'type' => 'varchar', 'constraint' => '80'
            ]
        ]);
        $this->forge->addKey('client_id', true);
        $this->forge->createTable('oauth_clients');
    }

    public function down()
    {
        $this->forge->dropTable('oauth_clients');
    }
}
