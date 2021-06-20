<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Categories extends Migration
{
	public function up()
	{
		$this->db->disableForeignKeyChecks();
		$this->forge->addField([
			'id' => [
				'type'           => 'INT',
				'unsigned'       => true,
				'auto_increment' => true
			],
			'name' => [
				'type'           => 'VARCHAR',
				'constraint'     => '100'
			],
		]);

		$this->forge->addKey('id', TRUE);
		$this->forge->createTable('categories', TRUE);
		$this->db->enableForeignKeyChecks();
	}

	public function down()
	{
		$this->forge->dropTable('categories');
	}
}
