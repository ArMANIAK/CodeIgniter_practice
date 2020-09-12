<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_authors extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'id' => array(
                                'type' => 'INT',
                                'constraint' => 10,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'name' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '255',
                        ),
                        'avatar' => array(
                            'type' => 'VARCHAR',
                            'constraint' => '255',
                        ),
                        'socialNetworks' => array(
                            'type' => 'VARCHAR',
                            'constraint' => '1023',
                        ),
                ));
                $this->dbforge->add_key('id', TRUE);
                $this->dbforge->create_table('authors');
        }

        public function down()
        {
                $this->dbforge->drop_table('authors');
        }
}