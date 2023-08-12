<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Template extends Migration
{
    public function up()
    {
        $this->forge->addField(
            [   
                'serialNumber'=>[
                    'type'=>'INT',
                    'constraint'=>1000,
                    'unsigned'=>True,
                    'auto_increment'=>True
                ],
                'identity'=>[
                    'type'=>'VARCHAR',
                    'constraint'=>'20'
                ],
                'fullname'=>[
                    'type'=>'VARCHAR',
                    'constraint'=>'50'
                ],
                'mail'=>[
                    'type'=>'VARCHAR',
                    'constraint'=>'50'
                ],                
                'username'=>[
                    'type'=>'VARCHAR',
                    'constraint'=>'50'
                ],
                'password'=>[
                    'type'=>'VARCHAR',
                    'constraint'=>'50'
                ],

            ]
        );
        $this->forge->addKey('id',True);
        $this->forge->createTable('studentIdentity');

        $this->forge->addField(
            [   
                'serialNumber'=>[
                    'type'=>'INT',
                    'constraint'=>1000,
                    'unsigned'=>True,
                    'auto_increment'=>True
                ],
                'username'=>[
                    'type'=>'VARCHAR',
                    'constraint'=>'20'
                ],
                'theme'=>[
                    'type'=>'VARCHAR',
                    'constraint'=>'50'
                ],
                'h1'=>[
                    'type'=>'VARCHAR',
                    'constraint'=>'50'
                ],                
                'h2'=>[
                    'type'=>'VARCHAR',
                    'constraint'=>'50'
                ],
                'content'=>[
                    'type'=>'TEXT',
                ],

            ]
        );
        $this->forge->addKey('id',True);
        $this->forge->createTable('post');

        $this->forge->addField(
            [   
                'serialNumber'=>[
                    'type'=>'INT',
                    'constraint'=>1000,
                    'unsigned'=>True,
                    'auto_increment'=>True
                ],
                'url'=>[
                    'type'=>'VARCHAR',
                    'constraint'=>'100'
                ],
                'department'=>[
                    'type'=>'VARCHAR',
                    'constraint'=>'50'
                ],
                

            ]
        );
        $this->forge->addKey('id',True);
        $this->forge->createTable('schoolQuery');

        $this->forge->addField(
            [   
                'Id'=>[
                    'type'=>'INT',
                    'constraint'=>1000,
                    'unsigned'=>True
                ],
                'Chinese'=>[
                    'type'=>'INT',
                    'constraint'=>15,
                    'unsigned'=>True
                ],
                'English'=>[
                    'type'=>'INT',
                    'constraint'=>15,
                    'unsigned'=>True
                ],
                'Math'=>[
                    'type'=>'INT',
                    'constraint'=>15,
                    'unsigned'=>True
                ],
                'Science'=>[
                    'type'=>'INT',
                    'constraint'=>15,
                    'unsigned'=>True
                ],
                'Social'=>[
                    'type'=>'INT',
                    'constraint'=>15,
                    'unsigned'=>True
                ],
            ]
        );
        $this->forge->addKey('id',True);
        $this->forge->createTable('grade');
        
    }

    public function down()
    {
        $this->forge->dropTable('studentIdentity');
        $this->forge->dropTable('post');
        $this->forge->dropTable('schoolQuery');
        $this->forge->dropTable('grade');
    }

}