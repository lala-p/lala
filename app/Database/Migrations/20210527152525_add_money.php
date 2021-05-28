<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddMoney extends Migration
{

    public function up()
    {
        
        $this->forge->addField([
            'custno' => [
                'type'          => 'INT',
                'constraint'    => 6,
            ],

            'saleno' => [
                'type'          => 'INT',
                'constraint'    => 8,
            ],
            
            'pcost' => [
                'type'          => 'INT',
                'constraint'    => 8,
            ],

            'amount' => [
                'type'          => 'INT',
                'constraint'    => 4,
            ],

            'price' => [
                'type'          => 'INT',
                'constraint'    => 8,
            ],

            'pcode' => [
                'type'          => 'VARCHAR',
                'constraint'    => '4',
            ],

            'sdate' => [
                'type'          => 'TIMESTAMP',
            ]

        ]);
        $this->forge->addKey('custno', TRUE);
        $this->forge->addKey('saleno', TRUE);
        $this->forge->createTable('money_tbl_02');


    }




    public function down()
    {
        $this->forge->dropTable('money_tbl_02');
    }


}
