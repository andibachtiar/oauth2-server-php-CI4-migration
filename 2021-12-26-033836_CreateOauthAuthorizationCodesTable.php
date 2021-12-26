<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateOauthAuthorizationCodesTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'authorization_code' => [
                'type' => 'varchar', 'constraint' => '40', 'not_null' => true
            ],
            'client_id' => [
                'type' => 'varchar', 'constraint' => '80', 'not_null' => true
            ],
            'user_id' => [
                'type' => 'varchar', 'constraint' => '80'
            ],
            'redirect_uri' => [
                'type' => 'varchar', 'constraint' => '2000'
            ],
            'expires' => [
                'type' => 'timestamp', 'not_null' => true
            ],
            'scope' => [
                'type' => 'varchar', 'constraint' => '4000'
            ],
            'id_token' => [
                'type' => 'varchar', 'constraint' => '1000'
            ]
        ]);
        $this->forge->addKey('autorization_code', true);
        $this->forge->createTable('oauth_authorization_codes');
    }

    public function down()
    {
        $this->forge->dropTable('oauth_authorization_codes');
    }
}
