<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Products extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => [
				'type'				=> 'INT',
				'unsigned'			=> true,
				'auto_increment'	=> true
			],
			'name' => [
				'type'           	=> 'VARCHAR',
				'constraint'     	=> '100'
			],
			'category_id' => [
				'type'				=> 'INT',
				'unsigned'       => true
			]
		]);

		$this->forge->addKey('id', TRUE);
		$this->forge->addForeignKey('category_id', 'categories', 'id');
		$this->forge->createTable('products', TRUE);
	}

	public function down()
	{
		$this->forge->dropTable('products');
	}
}
