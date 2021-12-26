<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateOauthRefreshTokensTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'refresh_token' => [
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
        $this->forge->addKey('refresh_token', true);
        $this->forge->createTable('oauth_refresh_tokens');
    }

    public function down()
    {
        $this->forge->dropTable('oauth_refresh_tokens');
    }
}
