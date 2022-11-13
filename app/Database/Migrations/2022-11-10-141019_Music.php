<?php
namespace App\Database\Migrations;
use CodeIgniter\Database\Migration;

class music extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 10,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'title' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'singer' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'genre' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'date_added' => [
                'type' => 'DATE',
            ],
        ]);

        // membuat primary key
        $this->forge->addKey('id', TRUE);

        // membuat tabel contact
        $this->forge->createTable('music', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('music');
    }
}
