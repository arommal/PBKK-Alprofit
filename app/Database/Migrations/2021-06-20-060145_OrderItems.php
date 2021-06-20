<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class OrderItems extends Migration
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
			'product_id' => [
				'type'           	=> 'INT',
				'unsigned'       	=> true,
			],
		]);

		$this->forge->addKey('id', TRUE);
		$this->forge->addForeignKey('order_id', 'orders', 'id');
		$this->forge->addForeignKey('product_id', 'products', 'id');
		$this->forge->createTable('order_items', TRUE);
	}

	public function down()
	{
		$this->forge->dropTable('order_items');
	}
}
