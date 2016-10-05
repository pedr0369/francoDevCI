<?php
class Migration_Criacao_tabela_posts extends CI_Migration {

    public function up(){
        $this->dbforge->add_field(array(
            'id' => array('type' => 'INT', 'auto_increment' => true),
            'titulo' => array('type' => 'varchar(100)'),
            'texto' => array('type' => 'TEXT'),
            'data TIMESTAMP default CURRENT_TIMESTAMP',
            'chamada' => array('type' => 'varchar(100)'),
            'galeria' => array('type' => 'varchar(255)'),
            'id_autor' => array('type' => 'INT'),
        ));
        $this->dbforge->add_key('id', true);
        $this->dbforge->add_field('CONSTRAINT FOREIGN KEY (id_autor) REFERENCES users(id)');
        $this->dbforge->create_table('posts');
    }

    public function down(){
        $this->dbforge->drop_table('posts');
    }

}
