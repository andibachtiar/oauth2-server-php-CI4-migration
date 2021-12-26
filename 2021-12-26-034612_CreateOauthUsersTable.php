<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateOauthUsersTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'username' => [
                'type' => 'varchar', 'constraint' => '80'
            ],
            'password' => [
                'type' => 'varchar', 'constraint' => '80'
            ],
            'first_name' => [
                'type' => 'varchar', 'constraint' => '80'
            ],
            'last_name' => [
                'type' => 'varchar', 'constraint' => '80'
            ],
            'email' => [
                'type' => 'varchar', 'constraint' => '80'
            ],
            'email_verified' => [
                'type' => 'boolean'
            ],
            'scope' => [
                'type' => 'varchar', 'constraint' => '4000'
            ]
        ]);
        $this->forge->addKey('username', true);
        $this->forge->createTable('oauth_users');
    }

    public function down()
    {
        $this->forge->dropTable('oauth_users');
    }
}
