<?php

class Migration_Customer_alter_table extends CI_Migration
{

    public function __construct()
    {
        parent::__construct();
        $this->load->dbforge();
    }

    public function up() {
        $this->dbforge->drop_column('customer' , 'city'  );
        $this->dbforge->drop_column('customer' ,'state' );
        $fields = [
            "ZoneId" => [
                'type' => 'INT',
                'constraint' => 11
            ],
            "CityId" => [
                'type' => 'INT',
                'constraint' => 11
            ]
        ];
        $this->dbforge->add_column('customer', $fields);
    }

    public function down(){
        $fields = [
            "state" => [
                'type' => 'VARCHAR',
                'constraint' => 50
            ],
            "city" => [
                'type' => 'VARCHAR',
                'constraint' => 50
            ]
        ];
        $this->dbforge->add_column('customer', $fields);
        $this->dbforge->drop_column('customer' , 'ZoneId'  );
        $this->dbforge->drop_column('customer' ,'CityId' );
    }
}