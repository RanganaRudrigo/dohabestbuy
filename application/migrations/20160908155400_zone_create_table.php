<?php

/**
 * Created by PhpStorm.
 * User: Gowtham
 * Date: 9/8/2016
 * Time: 3:55 PM
 */
class Migration_Zone_create_table extends CI_Migration
{

    public function __construct()
    {
        parent::__construct();
        $this->load->dbforge();
    }

    public function up()
    {
        $fields = [
            "ZoneId" => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ] ,
            "Zone" => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            "create_by" => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            "create_date" => [
                'type' => 'DATETIME'
            ],
            "Status" => [
                'type' => 'INT',
                'constraint' => 1,
                'default' => 1,
            ]
        ];

        $this->dbforge->add_field($fields);
        $this->dbforge->add_key('ZoneId',TRUE);
        $this->dbforge->create_table('zone',TRUE);
    }

    public function down()
    {
        $this->dbforge->drop_table('zone', TRUE);
    }

}