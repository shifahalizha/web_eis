<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Menu extends Migration
{
    public function up()
    {
        $fields = [
            "id" => [
                "type"=> "INT",
                "unsigned"=> true,
                "auto_increment"=> true,
            ],
            "namamenu" => [
                "type"=> "VARCHAR",
                "constraint" => "30",
            ],
            "caption" => [
                "type"=> "VARCHAR",
                "constraint" => "500",
            ],
            "bahan" => [
                "type"=> "VARCHAR",
                "constraint" => "2000",
            ],
            "cara" => [
                "type"=> "VARCHAR",
                "constraint" => "2000",
            ],
            "foto" => [
                "type"=> "VARCHAR",
                "constraint" => "225",
            ],
        ];
        $this->forge->addKey('id', true);
        $this->forge->addField($fields);
        $this->forge->createTable('menu', true);
    }

    public function down()
    {
        $this->forge->dropTable('menu', true);
    }
}
