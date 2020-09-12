<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Edit_authors extends CI_Migration {

        public function up()
        {
            $fields = array(
                'id' => array(
                        'name' => 'authorId',
                        'type' => 'INT',
                ),
            );
            $this->dbforge->modify_column('authors', $fields);
        }

        public function down()
        {
            $fields = array(
                'authorId' => array(
                        'name' => 'id',
                        'type' => 'INT',
                ),
            );
            $this->dbforge->modify_column('authors', $fields);
        }
}