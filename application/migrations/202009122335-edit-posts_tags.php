<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Edit_posts_tags extends CI_Migration {

        public function up()
        {
            $fields = array(
                'id' => array(
                        'name' => 'relationId',
                        'type' => 'INT',
                ),
            );
            $this->dbforge->modify_column('posts_tags', $fields);
        }

        public function down()
        {
            $fields = array(
                'relationId' => array(
                        'name' => 'id',
                        'type' => 'INT',
                ),
            );
            $this->dbforge->modify_column('posts_tags', $fields);
        }
}