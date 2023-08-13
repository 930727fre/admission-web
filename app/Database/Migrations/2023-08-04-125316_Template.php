<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Template extends Migration
{
    public function up()
    {
        $this->forge->addField(
            [   
                'serialNumber'=>[   //准考證
                    'type'=>'INT',
                    'constraint'=>1000,
                    'unsigned'=>True,
                    'auto_increment'=>True
                ],
                'username'=>[
                    'type'=>'VARCHAR',
                    'constraint'=>'50'
                ],
                'password'=>[
                    'type'=>'VARCHAR',
                    'constraint'=>'50'
                ],
                'idCard'=>[ //身分證
                    'type'=>'INT',
                    'constraint'=>1000
                ],
                'fullname'=>[   
                    'type'=>'VARCHAR',
                    'constraint'=>'50'
                ],
                'school'=>[   
                    'type'=>'VARCHAR',
                    'constraint'=>'50'
                ],
                'mail'=>[
                    'type'=>'VARCHAR',
                    'constraint'=>'50'
                ],                
                'phoneNumber'=>[
                    'type'=>'VARCHAR',
                    'constraint'=> 1000
                ],
                'relationship'=>[   //監護人關係
                    'type'=>'INT',
                    'constraint'=>'50'
                ],
                'phoneNumberOfGuardian'=>[  //監護人手機
                    'type'=>'VARCHAR',
                    'constraint'=> 1000
                ],
                'guardian'=>[   //監護人
                    'type'=>'VARCHAR',
                    'constraint'=>'50'
                ],
                'address'=>[
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
                'title'=>[
                    'type'=>'VARCHAR',
                    'constraint'=>'50'
                ],                
                'content'=>[
                    'type'=>'TEXT',
                ],
                'contentCSS'=>[
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
                'id'=>[
                    'type'=>'INT',
                    'constraint'=>1000,
                    'unsigned'=>True
                ],
                'chinese'=>[
                    'type'=>'INT',
                    'constraint'=>15,
                    'unsigned'=>True
                ],
                'english'=>[
                    'type'=>'INT',
                    'constraint'=>15,
                    'unsigned'=>True
                ],
                'math'=>[
                    'type'=>'INT',
                    'constraint'=>15,
                    'unsigned'=>True
                ],
                'science'=>[
                    'type'=>'INT',
                    'constraint'=>15,
                    'unsigned'=>True
                ],
                'social'=>[
                    'type'=>'INT',
                    'constraint'=>15,
                    'unsigned'=>True
                ],
            ]
        );
        $this->forge->addKey('id',True);
        $this->forge->createTable('grade');

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
                    'constraint'=>'50'
                ],
                'password'=>[
                    'type'=>'VARCHAR',
                    'constraint'=>'50'
                ],
                'fullname'=>[   
                    'type'=>'VARCHAR',
                    'constraint'=>'50'
                ],
                'college'=>[   
                    'type'=>'VARCHAR',
                    'constraint'=>'50'
                ],
                'mail'=>[
                    'type'=>'VARCHAR',
                    'constraint'=>'50'
                ],                
                'phoneNumber'=>[
                    'type'=>'VARCHAR',
                    'constraint'=> 1000
                ],
                'site'=>[   //網站
                    'type'=>'VARCHAR',
                    'constraint'=>'50'
                ],
                'address'=>[
                    'type'=>'VARCHAR',
                    'constraint'=>'50'
                ],

            ]
        );
        $this->forge->addKey('id',True);
        $this->forge->createTable('professorIdentity');

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
                    'constraint'=>'100'
                ],
                'password'=>[
                    'type'=>'VARCHAR',
                    'constraint'=>'50'
                ],
            ]
        );
        $this->forge->addKey('id',True);
        $this->forge->createTable('adminIdentity');

        $this->forge->addField(
            [   
                'month'=>[
                    'type'=>'INT',
                    'constraint'=>10000,
                ],
                'day'=>[
                    'type'=>'INT',
                    'constraint'=> 100000
                ],
                'hour'=>[
                    'type'=>'INT',
                    'constraint'=>10000,
                ],
                'minute'=>[
                    'type'=>'INT',
                    'constraint'=> 10000
                ],
                'second'=>[
                    'type'=>'INT',
                    'constraint'=>10000,
                ]
            ]
        );
        $this->forge->addKey('id',True);
        $this->forge->createTable('time');

        $this->db->query("INSERT INTO adminIdentity (username, password) VALUES ('f', 'f');");
        $this->db->query("INSERT INTO adminIdentity (username, password) VALUES ('s', 's');");
        $this->db->query("INSERT INTO post (username, title, content, contentCSS)VALUES ('f', 'title1', 'hello world你好', '');");
        $this->db->query("INSERT INTO studentIdentity (username, password, mail, idCard, fullname, school, phoneNumber, relationship, guardian, phoneNumberOfGuardian, address)VALUES ('f', 'f', '930727fre@gmail.com', '123', '莊翔鈞', '中正資工', '0961566469', '母子', '妳媽', '98', '總統府');");

        //$this->db->query();

        
    }

    public function down()
    {
        $this->forge->dropTable('studentIdentity');
        $this->forge->dropTable('post');
        $this->forge->dropTable('schoolQuery');
        $this->forge->dropTable('grade');
        $this->forge->dropTable('professorIdentity');
        $this->forge->dropTable('adminIdentity');
    }

}