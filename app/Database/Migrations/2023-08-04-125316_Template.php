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
                'username'=>[   
                    'type'=>'TEXT'
                ],
                'password'=>[   
                    'type'=>'TEXT'
                ],
                'idCard'=>[
                    'type'=>'TEXT'
                ],
                'fullname'=>[   
                    'type'=>'TEXT'
                ],
                'school'=>[   
                    'type'=>'TEXT'
                ],
                'mail'=>[   
                    'type'=>'TEXT'
                ],              
                'phoneNumber'=>[   
                    'type'=>'TEXT'
                ],
                'relationship'=>[   
                    'type'=>'TEXT'
                ],
                'phoneNumberOfGuardian'=>[   
                    'type'=>'TEXT'
                ],
                'guardian'=>[   
                    'type'=>'TEXT'
                ],
                'address'=>[   
                    'type'=>'TEXT'
                ]

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
                    'type'=>'TEXT'
                ],
                'title'=>[   
                    'type'=>'TEXT'
                ],              
                'content'=>[
                    'type'=>'TEXT',
                ],
                'contentCSS'=>[
                    'type'=>'TEXT',
                ]
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
                    'type'=>'TEXT'
                ],
                'department'=>[   
                    'type'=>'TEXT'
                ]
                

            ]
        );
        $this->forge->addKey('id',True);
        $this->forge->createTable('schoolQuery');

        $this->forge->addField(
            [   
                'id'=>[
                    'type'=>'INT',
                    'constraint'=>1000,
                    'unsigned'=>True,
                    'auto_increment'=>True
                ],
                'chinese'=>[   
                    'type'=>'TEXT'
                ],
                'english'=>[   
                    'type'=>'TEXT'
                ],
                'math'=>[   
                    'type'=>'TEXT'
                ],
                'science'=>[   
                    'type'=>'TEXT'
                ],
                'social'=>[   
                    'type'=>'TEXT'
                ]
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
                    'type'=>'TEXT'
                ],
                'password'=>[   
                    'type'=>'TEXT'
                ],
                'fullname'=>[   
                    'type'=>'TEXT'
                ],
                'idCard'=>[
                    'type'=>'TEXT'
                ],
                'school'=>[   
                    'type'=>'TEXT'
                ],
                'mail'=>[   
                    'type'=>'TEXT'
                ],               
                'phoneNumber'=>[   
                    'type'=>'TEXT'
                ],
                'site'=>[   
                    'type'=>'TEXT'
                ],
                'address'=>[   
                    'type'=>'TEXT'
                ]

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
                    'type'=>'TEXT'
                ],
                'password'=>[   
                    'type'=>'TEXT'
                ],
            ]
        );
        $this->forge->addKey('id',True);
        $this->forge->createTable('adminIdentity');

        $this->db->query("INSERT INTO adminIdentity (username, password) VALUES ('f', 'f');");
        $this->db->query("INSERT INTO adminIdentity (username, password) VALUES ('s', 's');");
        $this->db->query("INSERT INTO post (username, title, content, contentCSS)VALUES ('f', 'title1', 'hello world你好', '');");
        $this->db->query("INSERT INTO studentIdentity (username, password, mail, idCard, fullname, school, phoneNumber, relationship, guardian, phoneNumberOfGuardian, address)VALUES ('f', '252f10c83610ebca1a059c0bae8255eba2f95be4d1d7bcfa89d7248a82d9f111', '930727fre@gmail.com', '123', '莊翔鈞', '中正資工', '0961566469', '母子', '妳媽', '98', '總統府');");
        $this->db->query("INSERT INTO professorIdentity (username, password, fullname, idCard, school, mail, phoneNumber,site, address) VALUES ('pf', '252f10c83610ebca1a059c0bae8255eba2f95be4d1d7bcfa89d7248a82d9f111' ,'f教授', 'A3', '中正大學', '930727fre@gmail.com', '09', 'https://google.com', '台北市');");

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