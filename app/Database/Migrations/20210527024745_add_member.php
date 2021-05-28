<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddMember extends Migration
{

    public function up()
    {
        
        $this->forge->addField([
            'custno' => [
                'type'          => 'INT',
                'constraint'    => 6,
            ],

            'custname' => [
                'type'          => 'VARCHAR',
                'constraint'    => '20',
            ],
            
            'phone' => [
                'type'          => 'VARCHAR',
                'constraint'    => '13',
            ],

            'address' => [
                'type'          => 'VARCHAR',
                'constraint'    => '60',
            ],

            'joindate' => [
                'type'          => 'TIMESTAMP',
            ],

            'grade' => [
                'type'          => 'CHAR',
                'constraint'    => '1',
            ],

            'city' => [
                'type'          => 'CHAR',
                'constraint'    => '2',
            ]


        ]);
        $this->forge->addKey('custno', TRUE);
        $this->forge->createTable('member_tbl_02');


    }




    public function down()
    {
        $this->forge->dropTable('member_tbl_02');
    }


}
