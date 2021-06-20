<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Orders extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => [
				'type'           	=> 'INT',
				'unsigned'       	=> true,
				'auto_increment' 	=> true
			],
			'user_id' => [
				'type'           	=> 'INT',
				'unsigned'       	=> true
			],
			'status' => [
				'type'				=> 'ENUM',
				'constraint'		=> ['Pending', 'Delivering', 'Received'],
				'default'			=> 'Pending'
			]
		]);

		$this->forge->addKey('id', TRUE);
		$this->forge->addForeignKey('user_id', 'users', 'id');
		$this->forge->createTable('orders', TRUE);
	}

	public function down()
	{
		$this->forge->dropTable('orders');
	}
}
