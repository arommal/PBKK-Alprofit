<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Carts extends Migration
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
		]);

		$this->forge->addKey('id', TRUE);
		$this->forge->addForeignKey('user_id', 'users', 'id');
		$this->forge->createTable('carts', TRUE);
	}

	public function down()
	{
		$this->forge->dropTable('carts');
	}
}
