<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
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
			'username' => [
				'type'           => 'VARCHAR',
				'constraint'     => '50',
				'unique'		 => true
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
		$this->db->enableForeignKeyChecks();
	}

	public function down()
	{
		$this->forge->dropTable('users');
	}
}
