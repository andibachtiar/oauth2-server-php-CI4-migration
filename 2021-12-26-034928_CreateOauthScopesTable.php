<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateOauthScopesTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'scope' => [
                'type' => 'varchar', 'constraint' => '80', 'not_null' => true
            ],
            'is_default' => [
                'type' => 'boolean'
            ]
        ]);
        $this->forge->addKey('scope', true);
        $this->forge->createTable('oauth_scopes');
    }

    public function down()
    {
        $this->forge->dropTable('oauth_scopes');
    }
}
