<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CartItems extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => [
				'type'           	=> 'INT',
				'unsigned'       	=> true,
				'auto_increment' 	=> true
			],
			'cart_id' => [
				'type'           	=> 'INT',
				'unsigned'       	=> true,
			],
			'product_id' => [
				'type'           	=> 'INT',
				'unsigned'       	=> true
			],
		]);

		$this->forge->addKey('id', TRUE);
		$this->forge->addForeignKey('cart_id', 'carts', 'id');
		$this->forge->addForeignKey('product_id', 'products', 'id');
		$this->forge->createTable('cart_items', TRUE);
	}

	public function down()
	{
		$this->forge->dropTable('cart_items');
	}
}
