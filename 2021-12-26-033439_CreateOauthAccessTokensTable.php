<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateOauthAccessTokensTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'access_token' => [
                'type' => 'varchar', 'constraint' => '40', 'not_null' => true
            ],
            'client_id' => [
                'type' => 'varchar', 'constraint' => '80', 'not_null' => true
            ],
            'user_id' => [
                'type' => 'varchar', 'constraint' => '80'
            ],
            'expires' => [
                'type' => 'timestamp', 'not_null' => true
            ],
            'scope' => [
                'type' => 'varchar', 'constraint' => '4000'
            ]
        ]);
        $this->forge->addKey('access_token', true);
        $this->forge->createTable('oauth_access_tokens');
    }

    public function down()
    {
        $this->forge->dropTable('oauth_access_tokens');
    }
}
