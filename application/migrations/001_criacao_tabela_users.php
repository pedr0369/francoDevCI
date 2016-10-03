<?php
class Migration_Criacao_tabela_users extends CI_Migration {

    public function up(){
        $this->dbforge->add_field(array(
            'id' => array('type' => 'INT', 'auto_increment' => true),
            'email' => array('type' => 'varchar(100)'),
            'password' => array('type' => 'varchar(50)')
        ));
        $this->dbforge->add_key('id', true);
        $this->dbforge->create_table('users');
    }

    public function down(){
        $this->dbforge->drop_tabe('users');
    }

}
