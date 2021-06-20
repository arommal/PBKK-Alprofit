<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Transactions extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => [
				'type'           	=> 'INT',
				'unsigned'       	=> true,
				'auto_increment' 	=> true
			],
			'order_id' => [
				'type'           	=> 'INT',
				'unsigned'       	=> true
			],
			'status' => [
				'type'				=> 'ENUM',
				'constraint'		=> ['Pending', 'Confirmed'],
				'default'			=> 'Pending'
			],
		]);

		$this->forge->addKey('id', TRUE);
		$this->forge->addForeignKey('order_id', 'orders', 'id');
		$this->forge->createTable('transactions', TRUE);
	}

	public function down()
	{
		$this->forge->dropTable('transactions');		
	}
}
