<?php

/**
 * Created by PhpStorm.
 * User: Gowtham
 * Date: 9/8/2016
 * Time: 4:35 PM
 */
class Migration_City_create_table extends CI_Migration
{
    public function __construct()
    {
        parent::__construct();
        $this->load->dbforge();
    }

    public function up()
    {
        $fields = [
            "CityId" => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ] ,
            "City" => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            "ZoneId" => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            "DeliveryAmount" => [
                'type' => 'FLOAT',
                'constraint' => 11,
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
        $this->dbforge->add_key('CityId',TRUE);
        $this->dbforge->create_table('city',TRUE);
    }

    public function down()
    {
        $this->dbforge->drop_table('city', TRUE);
    }
}