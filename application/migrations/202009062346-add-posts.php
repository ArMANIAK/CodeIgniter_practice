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
                        'title' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '50',
                        ),
                        'body' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '1023',
                        ),
                        'preview' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '255',
                        ),
                        'image' => array(
                            'type' => 'VARCHAR',
                            'constraint' => '255',
                        ),
                        'author' => array(
                                'type' => 'int',
                                'unsigned' => TRUE,
                                'constraint' => 10,
                        ),
                        'date' => array(
                            'type' => 'DATE',
                            'constraint' => '1023',
                        ),
                        'newsViews' => array(
                                'type' => 'INT',
                                'constraint' => 10,
                                'unsigned' => TRUE,
                        ),
                ));
                $this->dbforge->add_key('id', TRUE);
                $this->dbforge->create_table('posts');
                $this->db->query('ALTER TABLE "posts" ADD FOREIGN KEY("author") REFERENCES "authors" ("id") ON DELETE CASCADE ON UPDATE CASCADE;');
        }

        public function down()
        {
                $this->dbforge->drop_table('posts');
        }
}