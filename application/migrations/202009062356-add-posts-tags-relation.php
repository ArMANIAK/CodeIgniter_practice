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
                        'post_id' => array(
                                'type' => 'INT',
                                'constraint' => 10,
                        ),
                        'tag_id' => array(
                                'type' => 'INT',
                                'constraint' => 10,
                        ),
                ));
                $this->dbforge->add_key('id', TRUE);
                $this->dbforge->create_table('posts_tags');
                $this->db->query('ALTER TABLE "posts_tags" ADD FOREIGN KEY("post_id") REFERENCES "posts" ("id") ON DELETE CASCADE ON UPDATE CASCADE;');
                $this->db->query('ALTER TABLE "posts_tags" ADD FOREIGN KEY("tag_id") REFERENCES "tagss" ("id") ON DELETE CASCADE ON UPDATE CASCADE;');
        }

        public function down()
        {
                $this->dbforge->drop_table('posts_tags');
        }
}