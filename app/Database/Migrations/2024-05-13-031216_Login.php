<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Login extends Migration
{
    public function up()
    {
        $fields = [
            "id" => [
                "type"=> "INT",
                "unsigned"=> true,
                "auto_increment"=> true,
            ],
            "username" => [
                "type"=> "VARCHAR",
                "constraint" => "50",
            ],
            "email" => [
                "type"=> "VARCHAR",
                "constraint" => "200",
            ],
            "password" => [
                "type"=> "TEXT",
            ],
        ];
        $this->forge->addKey('id', true);
        $this->forge->addKey('email', false, true); // Uniqe Key
        $this->forge->addField($fields);
        $this->forge->createTable('login', true);
    }

    public function down()
    {
        $this->forge->dropTable('login', true);
    }
}
