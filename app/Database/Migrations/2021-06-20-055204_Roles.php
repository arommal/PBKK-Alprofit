<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Roles extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => [
				'type'           => 'INT',
				'unsigned'       => true,
				'auto_increment' => true
			],
			'name' => [
				'type'           => 'ENUM',
				'constraint'     => ['customer', 'admin']
			],
		]);

		$this->forge->addKey('id', TRUE);
		$this->forge->createTable('roles', TRUE);
	}

	public function down()
	{
		$this->forge->dropTable('roles');
	}
}
