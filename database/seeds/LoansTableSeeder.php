<?php

use Illuminate\Database\Seeder;

class LoansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('loans')->insert([
        	[
        		'name' => 'Business Loan',
	            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry',
	            'status' => 1,
        	],
        	[
        		'name' => 'Home Loan',
	            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry',
	            'status' => 1,
        	],
        	[
        		'name' => 'Car Loan',
	            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry',
	            'status' => 1,
        	],
        	[
        		'name' => 'Personal Loan',
	            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry',
	            'status' => 1,
        	],
        ]);
    }
}
