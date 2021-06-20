<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => [
				'type'           => 'INT',
				'unsigned'       => true,
				'auto_increment' => true
			],
			'username' => [
				'type'           => 'VARCHAR',
				'constraint'     => '50'
			],
			'name' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'password' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'role_id'=> [
				'type' 			=> 'INT'
			],
		]);

		$this->forge->addKey('id', TRUE);
		$this->forge->addForeignKey('role_id', 'roles', 'id');
		$this->forge->createTable('users', TRUE);
	}

	public function down()
	{
		$this->forge->dropTable('users');
	}
}
