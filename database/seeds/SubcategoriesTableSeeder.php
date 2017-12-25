<?php

use Illuminate\Database\Seeder;

class SubcategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		DB::table('subcategories')->insert([
			'subcategory_name' => 'php',
			'category_id' => '1',
		]);

		DB::table('subcategories')->insert([
			'subcategory_name' => 'html',
			'category_id' => '1',
		]);

		DB::table('subcategories')->insert([
			'subcategory_name' => 'c#',
			'category_id' => '2',
		]);

		DB::table('subcategories')->insert([
			'subcategory_name' => 'c++',
			'category_id' => '2',
		]);
    }
}
